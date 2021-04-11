<div class=" col-md-4 col-md-offset-0 pb-0" id="side-bar">
            <div class="sidebar">
                <div class="card shadow mt-4" id="navmenu">
                    <div class="text-center mt-4 mb-4">
                        <img class="" src="img/mask.png">
                        <p class="card-title">Dr. Doctor Name Student</p>
                        <p class="card-text">BMDC:A123456</p>
                    </div>
                    <ul class="nav-list">
                   
                   <?php
                     $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

                   ?>
               <!-- <li class="msi-my-1 nav-item <?php echo ($actual_link=='http://localhost/gou/profile-1-page.php')?'active':'' ?>">
                       <a class="nav-link w-100 msi-dark ps-3"  href="{{ url('my-profile') }}">
                           <i class="fas fa-columns"></i>
                           <span class="ps-3">My Profile</span>
                       </a>
                   </li> -->
                        <li class="msi-my-1 nav-item  <?php echo ($actual_link=='http://localhost/gou/profile.php')?'active':'' ?>">

                            <a class="nav-link w-100 msi-dark ps-3" href="profile.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">Course Dashboard</span>
                            </a>
                        </li>
                        <li class="msi-my-1 nav-item   <?php echo ($actual_link=='http://localhost/gou/profile-1-page.php')?'active':'' ?>">
                            <a class="nav-link w-100 msi-dark ps-3" href="profile-1-page.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">Profile</span>
                            </a>
                        </li>
                        </li>
                        <li class="msi-my-1 nav-item  <?php echo ($actual_link=='http://localhost/gou/my-courses.php')?'active':'' ?>">
                            <a class="nav-link w-100 msi-dark ps-3" href="my-courses.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">Courses</span>
                            </a>
                        </li>
                        <li class="msi-my-1 nav-item  <?php echo ($actual_link=='http://localhost/gou/my-exams.php')?'active':'' ?>">
                            <a class="nav-link w-100 msi-dark ps-3" href="my-exams.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">Exams</span>
                            </a>
                        </li>
                        <li class="msi-my-1 nav-item  <?php echo ($actual_link=='http://localhost/gou/my-payments.php')?'active':'' ?>">
                            <a class="nav-link w-100 msi-dark ps-3" href="my-payments.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">Payments</span>
                            </a>
                        </li>
                        <li class="msi-my-1 nav-item  <?php echo ($actual_link=='http://localhost/gou/my-payments1.php')?'active':'' ?>">
                            <a class="nav-link w-100 msi-dark ps-3" href="my-payments1.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">Certificates</span>
                            </a>
                        </li>

                        <li class="msi-my-1 nav-item  <?php echo ($actual_link=='http://localhost/gou/login.php')?'active':'' ?>">
                            <a class="nav-link w-100 msi-dark ps-3" href="login.php">
                                <i class="fas fa-columns"></i>
                                <span class="ps-3">sign Out</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <!-- <script>
	//sidebar
	const sideBarIcon = document.getElementById('side_bar_btn');
	const sideBarMenu = document.getElementById('side_bar_menu');
	sideBarIcon.addEventListener("click", function(){
		sideBarMenu.classList.toggle('side_bar_menu_click')
		this.classList.toggle('rotate_180')
	})
</script> -->