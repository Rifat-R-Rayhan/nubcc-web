<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NUB - Computer Club</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/img/fav-2.png" rel="icon">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    {{-- <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet"> --}}



    {{-- Slider --}}
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	<link href="common-css/bootstrap.css" rel="stylesheet">
	
	<link href="common-css/ionicons.css" rel="stylesheet">
	
	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">


     {{-- backend --}}

      <!-- Core CSS -->
      <link rel="stylesheet" href="../backend/assets/vendor/css/core.css" class="template-customizer-core-css" />
      <link rel="stylesheet" href="../backend/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  
    {{-- backend end  --}}


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

   
		

		
    


</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End -->
{{-- 
    <div id="animationWindow">
    </div> --}}

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="{{ '/' }}"><img src="img/nubcc_logo.png" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{'../'}}">Home</a></li>
                    <li><a href="{{'about-us'}}">About</a></li>
                    <li><a href="{{'event'}}">Events</a></li>
                    <li><a href="{{'team'}}">Team</a></li>
                    <li><a href="{{'album'}}">Albums</a></li>

                    <li class="dropdown"><a href="{{ 'courses' }}"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>

                            <li class="dropdown"><a href="#"><span>Programming</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">C</a></li>
                                    <li><a href="#">C++</a></li>
                                    <li><a href="#">C#</a></li>
                                    <li><a href="#">Java</a></li>
                                    <li><a href="#">JavaScript</a></li>
                                    <li><a href="#">Python</a></li>
                                    <li><a href="#">Python and Machine Learning</a></li>
                                    <li><a href="#">AI and Deep Learning</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Software Development</a></li>
                            <li><a href="#">Cyber Security</a></li>
                            <li class="dropdown"><a href="#"><span>Web Development</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Python, Djano, Flask</a></li>
                                    <li><a href="#">PHP with Laravel Framework</a></li>
                                    <li><a href="#">MERN Stack Development</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Apps Development</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Flutter</a></li>
                                    <li><a href="#">React Native</a></li>
                                </ul>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="dropdown"><a href="{{ 'courses' }}"><span>Faculty & Alumni</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="https://nub.ac.bd/nub/memberlist/t05oqo1z/computer-science-&-engineering?fbclid=IwAR13LlvOJhc_L6pqiQq4N-nYiqwDGgVnkrNk5NHcFqrhE5GCiqNqcD6bH4Y">Faculties</a></li>
                            <li><a href="https://alumni.nub.ac.bd/welcome/general">Alumni</a></li>
                        </ul>
                    </li>
                    <li><a href="{{'contact'}}">Contact Us</a></li>
                    <li>
                       
                    @if (!Session()->has('UserLoginId'))
                        <div class="d-md-none d-sm-flex ms-3">
                            <a class="btn btn-sm btn-warning text-dark d-inline-block" href="{{'user-registration'}}">Register</a>
                            <a class="btn btn-sm btn-dark d-inline-block ms-2 text-white" href="{{'user-login'}}">Login</a>
                        </div>
                    @else
                    <div class="d-md-none d-sm-flex ms-3">

                            <a class="dropdown-item" href="/user-dashboard">
                                <span>
                                    <i class="bx bx-user me-2"></i>
                                    <span class="align-middle">My Profile</span>
                                </span>
                            
                            </a>

                            <div class="dropdown-divider"></div>
  
                            <a class="dropdown-item" href="{{route('user-logout')}}">
                                <span>
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                </span>

                            </a>

                    </div>
   
        
                    @endif
                    </li>
                    <!-- User -->

                   
                </ul>

                <div class="">
                    
                    <i class="bi bi-list mobile-nav-toggle text-muted"></i>
                </div>

                            
            </nav><!-- .navbar -->

            @if (!Session()->has('UserLoginId'))
                <div class="d-md-block d-none">
                    <a class="btn btn-sm btn-warning text-dark" href="{{'user-registration'}}">Register</a>
                    <a class="btn btn-sm btn-light" href="{{'user-login'}}">Login</a>
                </div>
            @else
                        
            <nav id="navbar" class="navbar me-5 d-md-block d-none">

                <ul>
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="assets/img/admin.png" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                <div class="avatar avatar-online">
                                    <img src="assets/img/admin.png" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                                </div>
                                <div class="flex-grow-1">
                                <span class="fw-semibold d-block">NUBCC</span>
                                <small class="text-muted">Member</small>
                                </div>
                            </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/user-dashboard">
                                <span>
                                    <i class="bx bx-user me-2"></i>
                                    <span class="align-middle">My Profile</span>
                                </span>
                            
                            </a>
                        </li>

                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('user-logout')}}">
                                <span>
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                </span>

                            </a>
                        </li>
                        </ul>
                    </li>
                </ul>

            </nav>

            @endif
           

                

              <!--/ User -->





        </div>
    </header><!-- End Header -->


    <main>
        @hasSection('content')
        @yield('content')

        @else
        <h2>No content fount</h2>
        @endif
    </main>


    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Northern University Bangladesh<br>
                            Ashkona, Airpot<br>
                            Dhaka.<br><br>
                            <strong>Phone:</strong> +880 1763088973<br>
                            <strong>Email:</strong> nubcomputerclub@gmail.com<br>
                        </p>

                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Menu Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{'../'}}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{'about-us'}}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{'contact'}}">Courses</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="services.html">Test</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Courses</h4>
                        <ul>

                            <li><i class="bx bx-chevron-right"></i> <a href="#">Apps Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Software Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Machine Learning</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Robotics</a></li>
                        </ul>
                    </div>



                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>About NUBCC</h3>
                        <p>Our Social Links</p>
                        <div class="social-links mt-3">
                            <a target="_blank" href="https://www.facebook.com/nubccofficial/" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a target="_blank" href="https://twitter.com/NUBCCofficial" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UC41hhn9ude7QHPamUcBhD6w" class="instagram"><i class="bx bxl-youtube"></i></a>
                            <a target="_blank" href="https://bd.linkedin.com/company/northernuniversitybangladesh" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>NUBCC</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
                Designed by <a href="#">nubcc_official</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   
    

    <!-- SCIPTS -->
	
	<script src="common-js/jquery-3.2.1.min.js"></script>
	
	<script src="common-js/tether.min.js"></script>
	
	<script src="common-js/bootstrap.js"></script>
	
	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
		
	
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
	
	
	<script src="common-js/scripts.js"></script>

     <!-- Vendor JS Files -->
     <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
     <script src="assets/vendor/aos/aos.js"></script>
     <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
     <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
     <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
     <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
     <script src="assets/vendor/php-email-form/validate.js"></script>
 
     <!-- Template Main JS File -->
     <script src="assets/js/main.js"></script>
 
     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="lib/wow/wow.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/counterup/counterup.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>

     <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/tshirt.js"></script>
 
    
 
</body>

</html>