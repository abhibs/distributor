@extends('admin.layout.app')
@section('content')
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Admin</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Retailer</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                {{-- <a href="{{ route('admin-distributor-create') }}" type="button" class="btn btn-primary">Add Distributor</a> --}}
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Zone Name</th>
                                <th>Super Stockist Name</th>
                                <th>District Name</th>
                                <th>Distributor Name</th>
                                <th>Shop Name</th>
                                <th>Owner Name</th>
                                <th>Mobile Number</th>
                                <th>Alternative Mobile Number</th>
                                <th>Shop Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Pincode</th>
                                <th>Image</th>
                                <th>Longitude</th>
                                <th>Latitude</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($datas as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td>{{ $item->zone->name }}</td>
                                    <td>{{ $item->superstockist->name }}</td>
                                    <td>{{ $item->district->name }}</td>
                                    <td>{{ $item->distributor->name }}</td>
                                    <td>{{ $item->shop_name }}</td>
                                    <td>{{ $item->owner_name }}</td>
                                    <td>{{ $item->mobile_no }}</td>
                                    <td>{{ $item->alternative_mobile_no }}</td>
                                    <td>{{ $item->shop_address }}</td>
                                    <td>{{ $item->city }}</td>
                                    <td>{{ $item->state }}</td>
                                    <td>{{ $item->pin_code }}</td>
                                    <td><a href="{{ asset($item->image) }}" target="_blank"><img
                                                src="{{ asset($item->image) }}" width="70px" height="40px"
                                                alt=""></a>
                                    </td>
                                    <td>{{ $item->latitude }}</td>
                                    <td>{{ $item->longitude }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SL No</th>
                                <th>Zone Name</th>
                                <th>Super Stockist Name</th>
                                <th>District Name</th>
                                <th>Distributor Name</th>
                                <th>Shop Name</th>
                                <th>Owner Name</th>
                                <th>Mobile Number</th>
                                <th>Alternative Mobile Number</th>
                                <th>Shop Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Pincode</th>
                                <th>Image</th>
                                <th>Longitude</th>
                                <th>Latitude</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection
