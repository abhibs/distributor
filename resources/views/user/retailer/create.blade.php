<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Retailer Register</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('admin/assets/images/favicon-32x32.png') }}" type="image/png">
    <!-- loader-->
    <link href="{{ asset('admin/assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('admin/assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/metismenu/mm-vertical.css') }}">
    <!--bootstrap css-->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('admin/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/sass/responsive.css') }}" rel="stylesheet">

</head>

<body>


    <!--authentication-->

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-5 mx-auto">
                <div
                    class="card rounded-4 mb-0 border-top border-bottom border-start border-end border-4 border-primary border-gradient-1">
                    <div class="card-body p-5">
                        <div class="text-center">
                            <img src="{{ asset('admin/assets/images/logo1.png') }}" class="mb-4" width="145"
                                alt="">
                        </div>

                        <div class="form-body my-4">
                            <form class="row g-3" method="POST" action="{{ route('retailer-store') }}"
                                enctype="multipart/form-data">
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
                                    <select class="form-select mb-3" name="district_id"
                                        aria-label="Default select example" id="district-select">
                                        <option></option>
                                    </select>
                                    @error('district_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="col-12" id="district-section">
                                    <label class="form-label">Select Distributor Name</label>
                                    <select class="form-select mb-3" name="distributor_id"
                                        aria-label="Default select example" id="district-select">
                                        <option></option>
                                    </select>
                                    @error('distributor_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="mb-3" id="shop-name-section">
                                    <label class="form-label">Shop Name</label>
                                    <input type="text" class="form-control" name="shop_name">
                                    @error('shop_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3" id="owner-name-section">
                                    <label class="form-label">Owner Name</label>
                                    <input type="text" class="form-control" name="owner_name">
                                    @error('owner_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3" id="mobile-no-section">
                                    <label class="form-label">Mobile No</label>
                                    <input type="text" class="form-control" name="mobile_no">
                                    @error('mobile_no')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3" id="alt-mobile-no-section">
                                    <label class="form-label">Alternative Mobile No</label>
                                    <input type="text" class="form-control" name="alternate_mobile_no">
                                </div>
                                <div class="mb-3" id="shop-address-section">
                                    <label class="form-label">Shop Address</label>
                                    <textarea class="form-control" name="shop_address"></textarea>
                                    @error('shop_address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3" id="city-section">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="city">
                                    @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3" id="state-section">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" name="state">
                                    @error('state')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3" id="pincode-section">
                                    <label class="form-label">Pin Code</label>
                                    <input type="text" class="form-control" name="pin_code">
                                    @error('pin_code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3" id="image-section">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3" id="latitude-section">
                                    <label for="formFile" class="form-label">Latitude</label>
                                    <input class="form-control" type="text" name="latitude" value="12.9753"
                                        readonly aria-label="default input example">
                                    @error('latitude')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="mb-3" id="longitude-section">
                                    <label for="formFile" class="form-label">Longitude</label>
                                    <input class="form-control" type="text" name="longitude" value="77.591"
                                        readonly aria-label="default input example">
                                    @error('longitude')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="col-12" id="submit-section">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-dark text-white">Add Retailer</button>
                                    </div>
                                </div>

                            </form>
                        </div>



                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div>


    <!--plugins-->
    {{-- <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="zone_id"]').on('change', function() {
                var zone_id = $(this).val();
                // alert(category_id);
                if (zone_id) {
                    $.ajax({
                        url: "{{ url('super/stocklist/ajax') }}/" + zone_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="super_stockist_id"]').html('');
                            var d = $('select[name="super_stockist_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="super_stockist_id"]').append(
                                    '<option value="' + value.id + '"> ' + value
                                    .name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
    {{-- <script>
        $(document).ready(function() {
            $('select[name="super_stockist_id"]').on('change', function() {
                var super_stockist_id = $(this).val();
                // alert(category_id);
                if (super_stockist_id) {
                    $.ajax({
                        url: "{{ url('district/ajax') }}/" + super_stockist_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="district_id"]').html('');
                            var d = $('select[name="district_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="district_id"]').append(
                                    '<option value="' + value.id + '"> ' + value
                                    .name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script> --}}


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
                            $('select[name="district_id"]').html('');
                            var d = $('select[name="district_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="district_id"]').append(
                                    '<option value="' + value.id + '"> ' + value
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
            $('select[name="district_id"], select[name="super_stockist_id"], select[name="zone_id"]').on('change',
                function() {
                    var district_id = $('select[name="district_id"]').val();
                    var super_stockist_id = $('select[name="super_stockist_id"]').val();
                    var zone_id = $('select[name="zone_id"]').val();

                    if (district_id && super_stockist_id && zone_id) {
                        $.ajax({
                            url: "{{ url('distributor/ajax') }}/" + district_id + "/" +
                                super_stockist_id + "/" + zone_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('select[name="distributor_id"]').html('');
                                var d = $('select[name="distributor_id"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="distributor_id"]').append(
                                        '<option value="' + value.id + '"> ' + value
                                        .name + '</option>'
                                    );
                                });
                            },
                        });
                    }
                });
        });
    </script>



</body>

</html>
