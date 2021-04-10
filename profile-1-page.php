<?php include 'header.php';?>
<!-- <div class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                     <div class="sidebar shadow">
                        <div class="card  mt-4">
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
                                    <li class="nav-item  active">
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
                                    <li class="nav-item">
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
                    </div> -->
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
                    <li class="msi-my-1 nav-item rounded  {{ Request::segment(1)=='dashboard'?'active':'' }}">
                       
                       <a class="nav-link w-100 msi-dark ps-3"  href="{{ url('dashboard') }}"> 
                           <i class="fas fa-columns"></i>
                           <span class="ps-3">Dashboard</span>
                       </a>
                   </li>
               <li class="msi-my-1 nav-item {{ Request::segment(1)=='my-profile'?'active':'' }}">
                       <a class="nav-link w-100 msi-dark ps-3"  href="{{ url('my-profile') }}">
                           <i class="fas fa-columns"></i>
                           <span class="ps-3">My Profile</span>
                       </a>
                   </li>
                        <li class="msi-my-1 nav-item">

                            <a class="nav-link w-100 msi-dark ps-3" href="profile.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">Course Dashboard</span>
                            </a>
                        </li>
                        <li class="msi-my-1 nav-item  Request::segment(1)=='profile-1-page'?'active':''">
                            <a class="nav-link w-100 msi-dark ps-3" href="profile-1-page">
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
                        <h4 class="card-title text-primary">My Profile</h4>
                        <hr class="bg-warning">
                        <table class="basic-information">
                            <tr>
                                <td class="title">Name:</td>
                                <td class="text">Dr. Doctor Student</td>
                            </tr>
                            <tr>
                                <td class="title">BMDC:</td>
                                <td class="text">A1234567</td>
                            </tr>
                            <tr>
                                <td class="title">Mobile:</td>
                                <td class="text">123456789</td>
                            </tr>
                            <tr>
                                <td class="title">Email:</td>
                                <td class="text">Yourmail123@gmail.com</td>
                            </tr>
                        </table>
                        <hr class="bg-warning">
                        <table>
                            <tr>
                                <td class="title"> Medical Collage:</td>
                                <td class="text">Mymensing Medical collage,Mymensing</td>
                            </tr>
                            <tr>
                                <td class="title"> Date of Birth:</td>
                                <td class="text"> 03-april-1996 </td>
                            </tr>
                            <tr>
                                <td class="title">Gender:</td>
                                <td class="text">Male</td>
                            </tr>
                            <tr>
                                <td class="title">Blood Group:</td>
                                <td class="text">B+</td>
                            </tr>
                            <tr>
                                <td class="title">Facebook ID:</td>
                                <td class="text">fblink.com/yourid</td>
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
                                <td class="title">Blood Group:</td>
                                <td class="text">B+</td>
                            </tr>
                            <tr>
                                <td class="title">Division:</td>
                                <td class="text">Dhaka</td>
                            </tr>
                        </table>

                        <a href="edit-profile.php" button class="btn edit-btn mt-4" type="submit">Edit <i
                                class="fa fa-pencil ps-3" aria-hidden="true"></i></a>

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