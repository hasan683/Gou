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

    <div class="sidebar bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card  mt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img class="" src="img/mask.png">
                                <h5 class="card-title text-primary fs-4">Dr. Doctor Name Student</h5>
                                <p class="card-text">BMDC:A123456</p>
                            </div>
                            <ul>
                                <li class="nav-item  active">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-columns"></i>
                                        <span class="p-2">Course Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item my-profile">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-id-card"></i>
                                        <span class="p-2">My Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-id-card"></i>
                                        <span class="p-2">My Courses</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-id-card"></i>
                                        <span class="p-2">My Exams</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-id-card"></i>
                                        <span class="p-2">My Payments</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-id-card"></i>
                                        <span class="p-2">My Certificates</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-id-card"></i>
                                        <span class="p-2">Sign Out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 mt-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Dashboard</h5>
                                    <div class="row">
                                        <div class="col-lg-6 mt-4">
                                            <div class="card enrolled-card pb-3">
                                                <div class="card-body pt-5">
                                                    <h5 class="card-title text-primary text-warning">05</h5>
                                                    <p class="card-text text-primary text-warning">
                                                        Enrolled Courses
                                                    </P>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-4">
                                            <div class="card completed-card pb-3">
                                                <div class="card-body pt-5">
                                                    <h5 class="card-title text-primary">05</h5>
                                                    <p class="card-text text-primary">
                                                        Completed Courses
                                                    </P>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-4">
                                            <div class="card certificates-card pb-3">
                                                <div class="card-body pt-5">
                                                    <h5 class="card-title text-light">05</h5>
                                                    <p class="card-text text-light">
                                                        Certificates
                                                    </P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>