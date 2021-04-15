
<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="gou.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://genesisbcscare.com/css/mk_style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Genesis Online University</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg main-menu navbar-light shadow-sm py-0">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto w-100">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index-page.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="online-course.php">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="online-exam.php">Exams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-page.php">About</a>
                    </li>
                    <li class="hot-line ms-lg-auto">
                       <i class="fas fa-headset pe-3"></i>
                        <span class="number">Hot-Line:01404432536</span>
                    </li>
                    <li class="">
                        <a href="profile.php" class="btn login-btn">Login</a>
                        <a href="login.php" class="btn  sign-up-btn">Sign
                            up</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <section class="login-section pt-4">
            <div class="row mx-0 justify-content-center">
                <div class="col-md-9 card-back shadow">
                    <p class="login-head"><u>Login</u><span class="Register-header ms-3"><u>Register</u></span></p>
                    <div class="main-content">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control email" placeholder="Email or Phone"
                                    id="exampleInputnumber1">
                            </div>

                            <div class="mb-3">
                                <input type="password" class="form-control password" placeholder="Password"
                                    id="exampleInputPassword1">
                                <span class="icon-eye"><i class="far fa-eye"></i></span>
                                <p class="text-end"><u>Forgot Password?</u></p>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"><span class="ms-1">Remember
                                        me</label>
                            </div>
                            <div class="text-center access-btn">
                                <a href="index-page.php" button type="submit" class="btn btn-login">Login</a>
                                <p class="mt-3 account">Don't have an account?</p>
                                <a href="register-page.php" button type="button" class="btn  register-btn">Register
                                    Now</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer >
        <div class="container top_footer py-3">
            <div class="lower_footer">
                <div>
                    <img class="img-fluid" src="img/logo.png" alt="Footer Logo">
                </div>
                <div class="me-lg-auto">
                    <span class="brand_text">Genesis Online University </span>
                </div>
                <div class="mx-auto">Copyright
                    &copy;2021
                    <a class="ps-1" href="/">Gou</a>
                </div>
                <div class="text-right">
                    <span>Developed By :</span>
                    <a class="link ps-1" target="_blank" href="//www.medigeneit.com"> MedigeneIT.com</a>
                </div>
            </div>
        </div>
    </footer>
    

  <script>
  
    $(document).ready(function () {
      $("#university").click(function () {
        $("#student").show();
        $("#graduate").hide();
      });

      $("#medical").click(function () {
        $("#graduate").show();
        $("#student").hide();
      });
      $(".select2").select2({
        allowClear: true,
        placeholder: "Select Institute",
        tags: true,
        tokenSeparators: [',']
      });

      $("#institute_name").on("change", function () {
        console.log($(this).val());
      })


    });

    $('#admission_year').datepicker({
      uiLibrary: 'bootstrap4'
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  </body>
</html>
 