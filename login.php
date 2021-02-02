<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="gou.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

</head>

<body>


    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
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
                    </ul>
                    <i class="fad fa-phone-plus text-info pr-2"></i>
                    <span class="text-info">Hot-Line:01404432536</span>
                    <a href="profile.php" button type="button" class="btn btn-success m-2">Profile</a>
                    <a href="login.php" button type="button" class="btn btn-primary">Sign Up</a>
                </div>
            </div>
        </nav>
    </section>

    <section class="register-section pt-4 bg-light">
        <div class="row  justify-content-center">
            <div class="col-lg-3 col-md-5 col-md-12 card-back">
                <p class="header"><u>Login</u><span class="text-primary ms-3"><u>Register</u></span></p>
                <div class="main-content px-4">
                    <form>
                        <div class="mb-3">
                        
                            <input type="number" class="form-control" placeholder="Email or Phone" id="exampleInputnumber1">
                        </div>
                        
                        <div class="mb-3">
                           <input type="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
                            <span class="icon-eye"><i class="far fa-eye"></i></span>
                            <p class="text-end">Forgot Password?</p>
                        </div>
                        <div class="mb-3 form-check fs-5">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"><span class="ms-1">Remember me</label>
                        </div>
                        <div class="text-center">
                        <a href="index-page.php" button type="submit" class="btn btn-primary px-5">Login</a>
                        <p class="mt-3">Don't have an account</p>
                        <a href="register-page.php" button type="button" class="btn btn-outline-warning mb-5 px-4">Register Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer" class="mt-auto">
        <div class="footer-content py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 university-title text-left">
                        <img src="img/logo.png">
                        <span class="text-center">
                            GENESIS ONLINE UNIVARSITY
                        </span>
                    </div>
                    <div class="col-sm-3 copyright-content">
                        <p class="text-muted">Copyright
                            &copy; 2021 <a class="text-muted" href="index-page.php">GOU</a>
                        </p>
                    </div>
                    <div class="col-sm-3 developed-content">
                        <p class="text-muted">Developed by:<a class="text-muted" href="http://www.medigeneit.com/">Medigene IT</a>
                        </p>
                    </div>
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
</body>

</html>