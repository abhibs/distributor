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
                        <li class="breadcrumb-item active" aria-current="page">All Registered Users</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                {{-- <a href="{{ route('admin-zone-create') }}" type="button" class="btn btn-primary">Add Zone</a> --}}
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
                                <th>Code</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Designation</th>
                                <th>Aadhar</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($datas as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->designation }}</td>
                                    <td>{{ $item->aadhar }}</td>
                                    <td><img src="{{ !empty($user->image) ? url($user->image) : url('no_image.jpg') }}"
                                            class="rounded-circle p-1 shadow mb-3" width="90" height="90"
                                            alt=""></td>
                                    <td><span class="badge bg-grd-primary">{{ $item->status }}</span></td>
                                    <td>
                                        <a href="{{ route('admin-user-pending-approve', $item->id) }}"
                                            class="btn btn-grd btn-grd-primary" id="confirm">Approve</a>
                                        <a href="{{ route('admin-user-pending-reject', $item->id) }}"
                                            class="btn btn-grd btn-grd-danger" id="processing">Reject</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SL No</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Designation</th>
                                <th>Aadhar</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection
