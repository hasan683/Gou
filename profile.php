<?php include 'header.php';?>
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
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-columns"></i>
                                        <span class="p-2">Course Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item my-profile">
                                    <a class="nav-link" href="profile-1-page.php">
                                        <i class="fas fa-id-card"></i>
                                        <span class="p-2">My Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="my-courses.php">
                                        <i class="fas fa-id-card"></i>
                                        <span class="p-2">My Courses</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="my-exams.php">
                                        <i class="fas fa-id-card"></i>
                                        <span class="p-2">My Exams</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="my-payments.php">
                                        <i class="fas fa-id-card"></i>
                                        <span class="p-2">My Payments</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="my-payments1.php">
                                        <i class="fas fa-id-card"></i>
                                        <span class="p-2">My Certificates</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-page.php">
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
    <?php include 'footer.php';?>