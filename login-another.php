<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/gou.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
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

    <div class="align">
        <div class="card auth mt-5 shadow">
            <div class="head">
                <div></div>
                <a id="login" class="selected" href="#login"><u>Login</u> </a>
                <a id="register" href="#register"><u>Register</u> </a>
                <div></div>
            </div>
            <div class="tabs">
                <form>
                    <div class="inputs">
                        <div class="input">
                            <input type="email" class="form-control" placeholder="Email or Phone">
                        </div>
                        <div class="input">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="text-end">
                            <a href="">Forgot Password</a>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"><span class="ms-1">Remember
                                    me</label>
                        </div>
                    </div>

                    <button type="button" class="login-button">Login</button>

                    <p class="account">Don't have an account?</p>
                    <button type="button" class="register-button">Register Now</button>

                </form>
                <form>
                    <div class="inputs">
                        <div class="input">
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="input">
                            <input type="number" class="form-control" placeholder="Phone">
                        </div>
                        <div class="input">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox-1">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1"><span class="agree-access">I agree to the
                                <strong class="text-warning"> Terms of Use</strong> and
                                <strong class="text-warning"> Privacy Policy</strong></span>
                        </label>
</div>
                    </div>

                    <button type="button" class="login-button">Register</button>
                    
                    <i class="mt-3 fs-5">Already have an account?</i>
                    <button type="button" class="register-button">Login Now</button>
                </form>
            </div>
        </div>
    </div>



    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/login.js"></script>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/5.0.0/js/jquery.min.js"></script>
      
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/my.js"></script>
</body>

</html>
</body>

</html>