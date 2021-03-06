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

    <div class="container card shadow px-sm-0 mt-5" style="width:396px;">
        <div class=" align-items-center gy-4">
            <div id="log_part">
                <div id="mobile" class="form-box mobile">
                    <div class="button-box">
                        <div id="btn"></div>
                        <a type="button" class="toggle-btn" onclick="login()">Login</a>
                        <a type="button" class="toggle-btn" onclick="register()">Register</a>
                    </div>
                    <form id="main-content">
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


                    <form id="main-content">
                        <div class="mb-3">
                            <i class="fas fa-home"></i>
                            <input type="text" class="form-control all-access" placeholder="Full Name">
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-mobile-alt"></i>
                            <input type="number" class="form-control all-access" placeholder="Phone"
                                id="exampleInputnumber1">
                        </div>
                        <div class="mb-3">
                            <i class="fal fa-envelope"></i>
                            <input type="email" class="form-control all-access" placeholder="Email"
                                id="exampleInputemail1">
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-lock"></i>
                            <input type="password" class="form-control all-access" placeholder="Password"
                                id="exampleInputPassword1">
                            <span class="icon-eye"><i class="far fa-eye"></i></span>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"><span class="agree-access">I agree to
                                    the
                                    <strong class="text-warning"> Terms of Use</strong> and
                                    <strong class="text-warning"> Privacy Policy</strong></span>
                            </label>
                        </div>
                        <div class="text-center access-btn">
                            <a href="register-5.php" button type="submit" class="btn reg-btn">Register</a>
                            <p class="fst-italic mt-2">Already have an account ?</p>
                            <a href="login.php" button type="button" class="btn log-btn">Login Now</a>
                        </div>
                    </form>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/5.0.0/jquery.min.js"></script>

    <script>
        const segment = 'login';



        $(document).ready(function () {
            if (segment == 'register') {
                register();
            }

            $('.doctor_day_slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                infinite: true,
                speed: 1000,
                autoplaySpeed: 4000,
                arrows: false,
                responsive: [{
                        breakpoint: 1121,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 701,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        });
    </script>

</body>

</html>