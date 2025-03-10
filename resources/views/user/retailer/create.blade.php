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
                            <form class="row g-3" method="POST" action="">
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
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Shop Name</label>
                                    <input type="text" class="form-control" name="shop_name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Owner Name</label>
                                    <input type="text" class="form-control" name="owner_name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Mobile No</label>
                                    <input type="text" class="form-control" name="mobile_no" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alternative Mobile No</label>
                                    <input type="text" class="form-control" name="alt_mobile_no">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Shop Address</label>
                                    <textarea class="form-control" name="shop_address" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" name="state" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pin Code</label>
                                    <input type="text" class="form-control" name="pin_code" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Photo (Capture Image)</label>
                                    <video id="camera" autoplay></video>
                                    <button type="button" class="btn btn-secondary mt-2"
                                        onclick="capturePhoto()">Capture</button>
                                    <canvas id="canvas" style="display:none;"></canvas>
                                    <input type="hidden" name="photo" id="photo">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Latitude</label>
                                    <input type="text" class="form-control" id="latitude" name="latitude"
                                        readonly required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Longitude</label>
                                    <input type="text" class="form-control" id="longitude" name="longitude"
                                        readonly required>
                                </div>


                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-dark text-white">Register</button>
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
