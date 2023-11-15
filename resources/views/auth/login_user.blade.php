<!DOCTYPE html>


<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../backend/assests/"
  data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login - NUBCC</title>

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
    <link rel="stylesheet" href="../backend/assets/css/login.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../backend/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../backend/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../backend/assets/js/config.js"></script>
</head>

  <body>
    <!-- Content -->
    
    <div class="login-box">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="#" class="app-brand-link gap-2">
                  <div class="mt-4">
                    <img
                      src="../backend/assets/img/icons/nubcc_logo.png"
                      alt="girl-doing-yoga-light"
                      width="100"
                      class="img-fluid"
                      data-app-dark-img="illustrations/girl-doing-yoga-dark.png"
                      data-app-light-img="illustrations/girl-doing-yoga-light.png"
                    />
                  </div>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Member Login! 👋</h4>

              <form id="formAuthentication" class="mb-3" action="{{route('loginUser')}}" method="POST">
              @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email or Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email or username"
                    autofocus
                />

                  
                            @error('email')
                            <br><br>
                            <span class="alert alert-danger">{{$message}}</span>
                            @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    <br><br>
                            @error('password')
                            <span class="alert alert-danger">{{$message}}</span>
                            @enderror
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>

              <p class="text-center">
                <span>Don't Have Account?</span>
                <a href="auth-register-basic.html">
                  <span>Create an account</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>



    <div class="copyright text-center text-muted">
      <span class="d-block">&copy Copyright 2023 NUB Computer Club</span>
      <code class="text-muted text-center">Developerd By - NUBCC_OFFICIAL</code>
    </div>
    <!-- / Content -->


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