<?php include 'header.php';?>
    <div class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="sidebar">
                        <div class="card shadow mt-4">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img class="" src="img/mask.png">
                                    <h5 class="card-title text-primary fs-4">Dr. Doctor Name Student</h5>
                                    <p class="card-text">BMDC:A123456</p>
                                </div>
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-columns"></i>
                                            <span class="p-2">Course Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="profile-1-page.php">
                                            <i class="fas fa-id-card"></i>
                                            <span class="p-2">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="my-courses.php">
                                            <i class="fas fa-id-card"></i>
                                            <span class="p-2">Courses</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="my-exams.php">
                                            <i class="fas fa-id-card"></i>
                                            <span class="p-2">Exams</span>
                                        </a>
                                    </li>
                                    <li class="nav-item   active">
                                        <a class="nav-link" href="my-payments.php">
                                            <i class="fas fa-id-card"></i>
                                            <span class="p-2">Payments</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="my-payments1.php">
                                            <i class="fas fa-id-card"></i>
                                            <span class="p-2">Certificates</span>
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
                </div>
                <div class="col-sm-8 mt-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title text-warning">My Payments</h5>
                                </div>
                            </div>
                        </div>
                    </div>


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
        <?php include 'footer.php';?>