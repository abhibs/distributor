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
                        <li class="breadcrumb-item active" aria-current="page">All Projector</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                {{-- <a href="{{ route('user-wallposter-create') }}" type="button" class="btn btn-primary">Add Pan Shop</a> --}}
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
                                <th>Distributor Name</th>
                                <th>Country</th>
                                <th>Region</th>
                                <th>City</th>
                                <th>Video</th>
                                <th>Map</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($datas as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->country }}</td>
                                    <td>{{ $item->region }}</td>
                                    <td>{{ $item->city }}</td>
                                    <td><a href="{{ asset($item->video) }}" target="_blank"><video
                                                src="{{ asset($item->video) }}" style="width: 100px; height:100px;"></a>
                                    </td>
                                    <td><a href="https://www.google.com/maps?q={{ $item->latitude }},{{ $item->longitude }}" target="_blank">View Location</a></td>

                                    <td>{{ $item->created_at->format('M d Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SL No</th>
                                <th>Distributor Name</th>
                                <th>Country</th>
                                <th>Region</th>
                                <th>City</th>
                                <th>Video</th>
                                <th>Map</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection
