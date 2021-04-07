<?php include 'header.php';?>
<div class="container">
    <div class="row">
        <div class=" col-md-4 col-md-offset-0 pb-0" id="side-bar">
            <div class="sidebar">
                <div class="card shadow mt-4" id="navmenu">
                    <div class="text-center mt-4 mb-4">
                        <img class="" src="img/mask.png">
                        <p class="card-title">Dr. Doctor Name Student</p>
                        <p class="card-text">BMDC:A123456</p>
                    </div>
                    <ul class="nav-list">
                        <li class="msi-my-1 nav-item active">

                            <a class="nav-link w-100 msi-dark ps-3" href="profile.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">Course Dashboard</span>
                            </a>
                        </li>
                        <li class="msi-my-1 nav-item">
                            <a class="nav-link w-100 msi-dark ps-3" href="profile-1-page.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">Profile</span>
                            </a>
                        </li>
                        </li>
                        <li class="msi-my-1 nav-item">
                            <a class="nav-link w-100 msi-dark ps-3" href="my-courses.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">Courses</span>
                            </a>
                        </li>
                        <li class="msi-my-1 nav-item">
                            <a class="nav-link w-100 msi-dark ps-3" href="my-exams.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">Exams</span>
                            </a>
                        </li>
                        <li class="msi-my-1 nav-item">
                            <a class="nav-link w-100 msi-dark ps-3" href="my-payments.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">Payments</span>
                            </a>
                        </li>
                        <li class="msi-my-1 nav-item">
                            <a class="nav-link w-100 msi-dark ps-3" href="my-payments1.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">Certificates</span>
                            </a>
                        </li>

                        <li class="msi-my-1 nav-item">
                            <a class="nav-link w-100 msi-dark ps-3" href="login.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">sign Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

                <div class="col-sm-8 mt-4">
                <section class="top-section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title">My Payments</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                    <div class="card shadow mt-3">
                        <div class="card-body overflow-auto">
                            <table class="table table-bordered table-responsive">
                       
                                <tr class="table-head">
                                    <th>SL</th>
                                    <th>Course/Exam Name</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                </tr>
                                  
                                <tr>
                                    <td>01</td>
                                    <td>Course/Exam Name</td>
                                    <td>03-04-1996</td>
                                    <td>500.00</td>
                                </tr>
                                
                                <tr>
                                    <td>02</td>
                                    <td>Course/Exam Name</td>
                                    <td>03-04-1996</td>
                                    <td>500.00</td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>





                </div>
            </div>
        </div>
        </div>
        <?php include 'footer.php';?>