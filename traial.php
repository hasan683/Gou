<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/gou.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css" />
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
<div class="container">
    <div class="main mt-5 ">
        <div class="card" style="width:396px;">
            <div class="card-body">
                <div class="card-body-top">
                    <button id="login" class="btn" onclick="Login_btn()" required>Login</button>
                    <button id="register" class="btn" onclick="register_btn()" required>Register</button>
                </div>
                <div class="card-body-bottom">

                    <form id="login-form">
                        <input type="text" class="form-control email  all-access" placeholder="Email or Phone"
                            id="exampleInputnumber1"><br>

                        <input type="password" class="form-control password  all-access" placeholder="Password"
                            id="exampleInputPassword1">
                        <span class="icon-eye"><i class="far fa-eye"></i></span>
                        <p class="text-end"><u>Forgot Password?</u></p>
                    </form>


                    <form id="register-form">
                        <input type="text" class="form-control all-access" placeholder="Full Name"><br>
                        <input type="number" class="form-control all-access" placeholder="Phone"
                            id="exampleInputnumber1"><br>
                        <input type="email" class="form-control all-access" placeholder="Email"
                            id="exampleInputemail1"><br>
                        <input type="password" class="form-control all-access" placeholder="Password"
                            id="exampleInputPassword1">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1"><br>
                        <label class="form-check-label" for="exampleCheck1"><span class="agree-access">I agree to the
                                <strong class="text-warning"> Terms of Use</strong> and
                                <strong class="text-warning"> Privacy Policy</strong></span>
                        </label>
                    </form>
                    <div class="clear"></div>
                </div>

            </div>
        </div>


    </div>
    
    </div>


    <footer>
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

    <script type="text/javascript">
        var a = document.getElementedById('login-form');
        var b = document.getElementedById('register-form');
        var c = document.getElementedById('bottom_line');
        var d = document.getElementedById('login');
        var e = document.getElementedById('register');
        var span = document.getElementedById('action_title');

        function register_btn() {
            a.style.left = "-450px";
            b.style.left = "30px";
            c.style.left = "215px";
            d.style.color = "red";
            e.style.color = "red";
            span.textContent = "register";
        }

        function login_btn() {
            a.style.left = "30px";
            b.style.left = "450px";
            c.style.left = "30px";
            d.style.color = "red";
            e.style.color = "red";
            span.textContent = "login";
        }
    </script>
   

</body>

</html>