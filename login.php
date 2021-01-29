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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Exams</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <i class="fad fa-phone-plus text-info pr-2"></i>
                    <span class="text-info">Hot-Line:01404432536</span>
                    <button type="button" class="btn btn-success m-2">Profile</button>
                    <button type="button" class="btn btn-outline-warning">Sign Out</button>
                </div>
            </div>
        </nav>
    </section>

    <section class="pt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-5 col-md-12">



                    <div class="bg-info px-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center fw-bolder">
                                    <span class="fs-1 p-2 text-primary font-weight"
                                        style="text-decoration:underline;">Login</span> <span class="fs-1 text-muted"
                                        style="text-decoration:underline;">Register</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="email">Email or phone</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <img src="img/icon-email.png" alt="icon_email"/>
                                        </span>
                                    </div>
                                    <input id="j_username" name="j_username" class="form-control" data-validation-type="not-blank" placeholder="Email or phone" validation="required" required="required" type="text" value=""/>
                                </div>
                            </div>

                        <form action="index-page.php">

                            <div class="form-group">

                                <input type="text" class="form-control my-4" name="username" placeholder="Email or Name"
                                    value="" required />
                            </div>

                            <div class="form-group">

                                <input type="password" class="form-control" placeholder="Password" name="password"
                                    required />
                            </div>

                            <div class="social-login mb-3">
                                <ul class="none">
                                    <li class="text-end">Forgot Password?</li>
                                    <li>
                                        <input id="reg" class="checkbox-custom" type="checkbox" name="remember"
                                            value="1" checked>
                                        <label for="reg" class="checkbox-custom-label ">Remember me</label>
                                    </li>

                                </ul>

                            </div>
                        </form>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary px-5">Login</button>
                            <p class="fs-5 mt-2">Don't have an account?</p>
                            <button type="button" class="btn login-bottom btn-outline-warning">Resigter Now</button>
                        </div>
                    </div>





                </div>
    </section>


    <footer id="footer" class="mt-5">
        <div class="py-4 bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 text-left ml-5">
                        <img src="img/logo.png">
                        <span class="text-info ml-3">
                            GENESIS ONLINE UNIVARSITY
                        </span>
                    </div>
                    <div class="col-sm-4 mt-4">
                        <p class="text-white">Copyright
                            &copy; 2021 GOU

                        </p>
                    </div>
                    <div class="col-sm-4 mt-4">
                        <p class="text-white">Developed by:Medigene IT
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