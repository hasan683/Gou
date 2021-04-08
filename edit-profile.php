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



        <div class="col-sm-8">
            <div class="table-content shadow">
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Edit Profile</h4>
                        <hr class="bg-warning">
                        <table class="basic-information">
                            <tr>
                                <td class="title">Name:</td>
                                <td class="text"><input type="text" class="form-control"
                                        placeholder="Type Your Full Name" aria-label="Username"
                                        aria-describedby="basic-addon1"></td>
                            </tr>
                            <tr>
                                <td class="title">BMDC:</td>
                                <td class="text"><input type="number" class="form-control" placeholder="BMDC No"
                                        aria-label="Username" aria-describedby="basic-addon1"></td>
                            </tr>
                            <tr>
                                <td class="title">Mobile:</td>
                                <td class="text"><input type="number" class="form-control" placeholder="Mobile Number"
                                        aria-label="Username" aria-describedby="basic-addon1"></td>
                            </tr>
                            <tr>
                                <td class="title">Email:</td>
                                <td class="text"><input type="mail" class="form-control"
                                        placeholder="Yourmail @ gmail.com" aria-label="Username"
                                        aria-describedby="basic-addon1"></td>
                            </tr>
                        </table>
                        <hr class="bg-warning">
                        <table class="infomation">
                            <tr>
                                <td class="title"> Medical Collage:</td>
                                <td class="text">
                                    <input type="text" class="form-control input-file" placeholder="Type Your Medical Collage" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </td>
                            </tr>
                            <tr>
                                <td class="title"> Date of Birth:</td>
                                <td class="text">
                                    <?php
                                          echo  date("Y/m/d") . "<br>";
                                     ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Gender:</td>
                                <td class="text">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"><span class="ms-1">Male</label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"><span class="ms-1">Female</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Blood Group:</td>
                                <td class="text">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"><span class="ms-1">A+</label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"><span class="ms-1">B+</label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"><span class="ms-1">AB+</label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"><span class="ms-1">O+</label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"><span class="ms-1">A-</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Facebook ID:</td>
                                <td class="text"><input type="text" class="form-control" placeholder="Facebook.com Your"
                                        aria-label="Username" aria-describedby="basic-addon1"></td></td>
                            </tr>
                        </table>
                        <hr class="bg-warning">
                        <table>
                            <tr>
                                <td class="title"> Present Address:</td>
                                <td class="text">32/A Dhanmondi,Free School Stree</td>
                            </tr>
                            <tr>
                                <td class="title"> Upazila:</td>
                                <td class="text">Dhanmondi</td>
                            </tr>
                            <tr>
                                <td class="title"> District:</td>
                                <td class="text">Dhaka</td>
                            </tr>
                    
                            <tr>
                                <td class="title">Division:</td>
                                <td class="text">Dhaka</td>
                            </tr>
                        </table>
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