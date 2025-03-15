@extends('admin.layout.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="main-content">


        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Admin</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Distributor</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">

            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <hr>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin-distributor-store') }}" method="post">
                            @csrf
                            <div class="col-12" id="district-section">
                                <label class="form-label">Select Zone</label>
                                <select class="form-select mb-3" name="zone_id" aria-label="Default select example"
                                    id="district-select">
                                    <option selected="">Select Zone</option>
                                    @foreach ($zones as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('zone_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12" id="district-section">
                                <label class="form-label">Select Super Stockist</label>
                                <select class="form-select mb-3" name="super_stockist_id"
                                    aria-label="Default select example" id="district-select">
                                    <option></option>
                                </select>
                                @error('super_stockist_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="col-12" id="district-section">
                                <label class="form-label">Select District Name</label>
                                <select class="form-select mb-3" name="district_id" aria-label="Default select example"
                                    id="district-select">
                                    <option></option>
                                </select>
                                @error('district_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="formName" class="form-label">Distributor Name</label>
                                <input class="form-control" type="text" name="name"
                                    placeholder="Enter Distributor Name" aria-label="default input example">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <button type="submit" class="btn btn-grd btn-grd-success px-5">Add Distributor</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="zone_id"]').on('change', function() {
                var zone_id = $(this).val();

                if (zone_id) {
                    $.ajax({
                        url: "{{ url('super/stocklist/ajax') }}/" + zone_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var superStockistDropdown = $('select[name="super_stockist_id"]');
                            superStockistDropdown.html('');

                            // Add the default "Please Select Super Stockist" option
                            superStockistDropdown.append(
                                '<option value="">Please Select Super Stockist</option>');

                            $.each(data, function(key, value) {
                                superStockistDropdown.append(
                                    '<option value="' + value.id + '">' + value
                                    .name + '</option>'
                                );
                            });
                        },
                    });
                }
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            $('select[name="super_stockist_id"], select[name="zone_id"]').on('change', function() {
                var super_stockist_id = $('select[name="super_stockist_id"]').val();
                var zone_id = $('select[name="zone_id"]').val();

                if (super_stockist_id && zone_id) {
                    $.ajax({
                        url: "{{ url('district/ajax') }}/" + super_stockist_id + "/" +
                            zone_id, // Pass both parameters
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var districtDropdown = $('select[name="district_id"]');
                            districtDropdown.html('');

                            // Add the default "Please Select District" option
                            districtDropdown.append(
                                '<option value="">Please Select District</option>');

                            $.each(data, function(key, value) {
                                districtDropdown.append(
                                    '<option value="' + value.id + '">' + value
                                    .name + '</option>'
                                );
                            });
                        },
                    });
                }
            });
        });
    </script>
@endsection
