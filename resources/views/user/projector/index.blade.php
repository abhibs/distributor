@extends('user.layout.app')
@section('content')
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">User</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Today Projector</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{ route('user-projector-create') }}" type="button" class="btn btn-primary">Add Projector</a>
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
                                <th>Country</th>
                                <th>Region</th>
                                <th>City</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Video</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($datas as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td>{{ $item->country }}</td>
                                    <td>{{ $item->region }}</td>
                                    <td>{{ $item->city }}</td>
                                    <td>{{ $item->latitude }}</td>
                                    <td>{{ $item->longitude }}</td>
                                    <td><a href="{{ asset($item->video) }}" target="_blank"><video
                                                src="{{ asset($item->video) }}" style="width: 150px; height:150px;"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SL No</th>
                                <th>Country</th>
                                <th>Region</th>
                                <th>City</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Video</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection
