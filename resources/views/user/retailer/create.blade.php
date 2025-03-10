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
                            <form class="row g-3" method="POST" action="{{ route('retailer-store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Select District</label>
                                    <select class="form-select mb-3" name="district_id"
                                        aria-label="Default select example">
                                        <option selected="">Select District</option>
                                        @foreach ($districts as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('district_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Select Super Stockists</label>
                                    <select class="form-select mb-3" name="super_stockist_id"
                                        aria-label="Default select example">
                                        <option selected="">Select Super Stockists</option>
                                        @foreach ($superstockists as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('super_stockist_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Select Distributor</label>
                                    <select class="form-select mb-3" name="distributor_id"
                                        aria-label="Default select example">
                                        <option selected="">Select Distributor</option>
                                        @foreach ($distributors as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('distributor_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Shop Name</label>
                                    <input type="text" class="form-control" name="shop_name">
                                    @error('shop_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Owner Name</label>
                                    <input type="text" class="form-control" name="owner_name">
                                    @error('owner_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Mobile No</label>
                                    <input type="text" class="form-control" name="mobile_no">
                                    @error('mobile_no')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alternative Mobile No</label>
                                    <input type="text" class="form-control" name="alternate_mobile_no">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Shop Address</label>
                                    <textarea class="form-control" name="shop_address"></textarea>
                                    @error('shop_address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="city">
                                    @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" name="state">
                                    @error('state')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pin Code</label>
                                    <input type="text" class="form-control" name="pin_code">
                                    @error('pin_code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Latitude</label>
                                    <input class="form-control" type="text" name="latitude" value="12.9753"
                                        readonly aria-label="default input example">
                                    @error('latitude')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Longitude</label>
                                    <input class="form-control" type="text" name="longitude" value="77.591"
                                        readonly aria-label="default input example">
                                    @error('longitude')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="col-12">
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

    <!--authentication-->




    <!--plugins-->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>

    <script>
        function showRetailerForm() {
            let distributorDropdown = document.getElementById('distributor-dropdown');
            let retailerForm = document.getElementById('retailer-form');
            retailerForm.style.display = distributorDropdown.value ? 'block' : 'none';
        }

        // Camera Capture Functionality
        let video = document.getElementById('camera');
        let canvas = document.getElementById('canvas');
        let photoInput = document.getElementById('photo');

        navigator.mediaDevices.getUserMedia({
                video: true
            })
            .then(stream => {
                video.srcObject = stream;
            })
            .catch(err => console.error("Camera access denied!", err));

        function capturePhoto() {
            let context = canvas.getContext('2d');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            photoInput.value = canvas.toDataURL('image/png'); // Store image as base64
            alert("Photo Captured!");
        }
    </script>


</body>

</html>
