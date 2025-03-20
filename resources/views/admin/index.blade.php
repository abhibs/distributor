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
                            <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                        </ol>
                    </nav>
                </div>
            {{-- <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary">Settings</button>
                        <button type="button"
                            class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                                href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item"
                                href="javascript:;">Separated link</a>
                        </div>
                    </div>
                </div> --}}
        </div>
        <!--end breadcrumb-->

        <div class="row">

            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">

                        <div>
                            <h4 class="mb-0">{{$todayRetailers}}</h4>
                            <p class="mb-3">Today Retailer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-0">{{$todayWallPoster}}</h4>
                            <p class="mb-3">Today Wall Poster</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-0">{{$todayPanShop}}</h4>
                            <p class="mb-3">Today Pan Shop</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-0">{{$todayProjector}}</h4>
                            <p class="mb-3">Today Projector</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">

                        <div>
                            <h4 class="mb-0">{{$Retailers}}</h4>
                            <p class="mb-3"> Retailer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-0">{{$WallPoster}}</h4>
                            <p class="mb-3"> Wall Poster</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-0">{{$PanShop}}</h4>
                            <p class="mb-3"> Pan Shop</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-0">{{$Projector}}</h4>
                            <p class="mb-3"> Projector</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">

                        <div>
                            <h4 class="mb-0">{{$RegisteredUser}}</h4>
                            <p class="mb-3"> Registered User</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-0">{{$ApprovedUser}}</h4>
                            <p class="mb-3"> Approved User</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-0">{{$RejectedUser}}</h4>
                            <p class="mb-3"> Rejected User</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-0">{{$Zones}}</h4>
                            <p class="mb-3"> Zones </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-0">{{$SuperStockists}}</h4>
                            <p class="mb-3"> Super Stockists </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-0">{{$Districts}}</h4>
                            <p class="mb-3"> Districts </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div>
                            <h4 class="mb-0">{{$Distributors}}</h4>
                            <p class="mb-3"> Distributors </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
@endsection
