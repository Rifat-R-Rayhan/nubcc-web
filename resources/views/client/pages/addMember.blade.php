@extends('client.layouts.masterlayout')

@section('content')
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../backend/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - NUBCC</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../backend/assets/img/favicon/favicon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../backend/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../backend/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../backend/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../backend/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../backend/assets/vendor/libs/apex-charts/apex-charts.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../backend/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../backend/assets/js/config.js"></script>
</head>

<body>
    <!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Member Registration</span></h4>



        <hr class="my-5" />


        <div class="add_member">
            <div class="col-lg-4 col-md-6">

                <div class="mt-3 mb-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary m-5" data-bs-toggle="modal" data-bs-target="#modalCenter">
                        Registration
                    </button>

                    <!-- Modal -->
                    <form action="{{route('member_registration')}}" method="POST" enctype="multipart/form-data">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                    @csrf
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Add New member</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="nameWithTitle" class="form-label">Name</label>
                                                <input name="member_name" type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name" />
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Designation</label>
                                                <input name="designation" type="text" id="emailWithTitle" class="form-control" placeholder="Secretary of Web Developement" />
                                            </div>

                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Email</label>
                                                <input name="email" type="text" id="emailWithTitle" class="form-control" placeholder="sample@gmail.com" />
                                            </div>

                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Password</label>
                                                <input name="password" type="text" id="emailWithTitle" class="form-control" placeholder="Alpha Numeric" />
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Contact No.</label>
                                                <input name="mobile" type="text" id="emailWithTitle" class="form-control" placeholder="Ex. 01610158095" />
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Facebook Link</label>
                                                <input name="fb_link" type="text" id="emailWithTitle" class="form-control" placeholder="https://www.facebook.com/rifatrrayhan" />
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Student ID</label>
                                                <input type="text" id="emailWithTitle" class="form-control" name="student_id" placeholder="4122********" required/>
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Program</label>
                                            <select id="program" class="form-select" aria-label="Default select example" name="program" required>                                
                                                <option value="CSE-Day">CSE-Day</option>
                                                <option value="CSE-Evening">CSE-Evening</option>
                                              </select>
                                        </div>

                                    </div>

                                        <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Semester</label>
                                            <select id="program" class="form-select" name="semester" aria-label="Default select example" name="semester" required>                                
                                                <option value="Spring {{2000+ (date('y')-4)}}">Spring {{2000+ (date('y')-4)}}</option>
                                                <option value="Fall {{2000+ (date('y')-4)}}">Fall {{2000+ (date('y')-4)}}</option>
                                                <option value="Summer {{2000+ (date('y')-4)}}">Summer {{2000+ (date('y')-4)}}</option>
                                                <option value="Spring {{2000+ (date('y')-3)}}">Spring {{2000+ (date('y')-3)}}</option>
                                                <option value="Fall {{2000+ (date('y')-3)}}">Fall {{2000+ (date('y')-3)}}</option>
                                                <option value="Summer {{date('y')-3}}">Summer {{2000+ (date('y')-3)}}</option>
                                                <option value="Spring {{date('y')-2}}">Spring {{2000+ (date('y')-2)}}</option>
                                                <option value="Fall {{2000+ (date('y')-2)}}">Fall {{2000+ (date('y')-2)}}</option>
                                                <option value="Summer {{2000+ (date('y')-2)}}">Summer {{2000+ (date('y')-2)}}</option>
                                                <option value="Spring {{2000+ (date('y')-1)}}">Spring {{2000+ (date('y')-1)}}</option>
                                                <option value="Fall {{2000+ (date('y')-1)}}">Fall {{2000+ (date('y')-1)}}</option>
                                                <option value="Summer {{2000+ (date('y')-1)}}">Summer {{2000+ (date('y')-1)}}</option>
                                                <option value="Spring {{2000+ date('y') }}">Spring {{2000+ date('y') }}</option>
                                                <option value="Fall {{2000+ date('y') }}">Fall {{2000+ date('y') }}</option>
                                                <option value="Summer {{2000+ date('y') }}">Summer {{2000+ date('y') }}</option>
                                                <option value="Spring {{2000+ (date('y')+1) }}">Spring {{ 2000+ (date('y')+1) }}</option>
                                            </select>
                                        </div>

                                    </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Image</label>
                                                <input name="image" type="file" id="emailWithTitle" class="form-control" data-fouc/>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Register member</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>





    </div>
    <!-- / Content -->

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
                ©copyright
                <script>
                    document.write(new Date().getFullYear());
                </script>
                NUBCC, Developed by
                <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">NUBCC_OFFICIAL</a>
            </div>
            <div>
                <a href="#" class="footer-link me-4" target="_blank">License</a>
                <a href="#" target="_blank" class="footer-link me-4">Policies</a>
            </div>
        </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../backend/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../backend/assets/vendor/libs/popper/popper.js"></script>
    <script src="../backend/assets/vendor/js/bootstrap.js"></script>
    <script src="../backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../backend/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../backend/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../backend/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../backend/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>



</html>

@endsection