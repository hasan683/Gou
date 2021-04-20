<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/gou.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="css/mk_style.css">
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


        <section class="container">
            <div class="row">
            <div class="card shadow mt-5">
                <div class="pb-5 mt-5">
                    <div class="mkheader">
                        <p class="title">Welcome To </p>
                        <p class="title-1">GENESIS ONLINE UNIVERSITY</p>
                        <p class="text">Please input your graduation information</p>
                    </div>
                    <div class="checkbox">
                        <div class="custom-control custom-radio">
                            <input type="checkbox" class="custom-checkbox-input" id="university"
                                name="defaultExampleRadios">
                            <label class="form-check-label" for="defaultUnchecked">Medical Student</label>
                        </div>
                        <div class="custom-control custom-radio cb2">
                            <input type="checkbox" class="custom-checkbox-input" id="medical" name="defaultExampleRadios">
                            <label class="form-check-label" for="defaultChecked">Medical graduate</label>
                        </div>

                    </div>
                </div>
      
       
                <form class="form-horizontal form-section" id="a-div">
                    <input type="hidden" name="_token" value="tDUebnY5UeOslzQnk8sRUhy1VvYfztxSuR6oHu0o">
                    <div class="form-group form-content1">
                        <label class="control-label col-sm-4" for="institute_name">Medical Collage:</label>
                        <select class="form-select" id="institute_name" name="medical_college_id" required>
                             <option value="">None</option>
                            <option value="1">Khawja Eunus Ali Medical College</option>
                            <option value="2">Dhaka Medical Collage</option>
                            <option value="3">Rajshahi Medical Collage</option>
                        </select>
                        <input type="hidden" name="new_medical_college" id="new_medical_college">
                    </div>

                    <div class="form-group form-content1">
                        <label class="control-label col-sm-4" for="admission_year">Admission Year:</label>
                        <select class="form-select" id="admission_year" placeholder="Admission Year:"
                            name="admission_year" required>
                            <option value="">None</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>

                    <div class="form-group form-content1">
                        <label class="control-label col-sm-4" for="bmdc_number">BMDC Type:</label>
                        <select class="form-select" id="bmdc_no" placeholder="Bmdc No" name="bmdc_No" required>
                        <option value="">None</option>
                        <option value="Temporary">Temporary</option>
                            <option value="Permanent">Permanent</option>
                        </select>
                    </div>

                    <div class="form-group Last-child">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn update-btn">Update</button>
                        </div>
                    </div>

                </form>
                <form class="form-horizontal form-section"id="d-div">
                    <input type="hidden" name="_token" value="tDUebnY5UeOslzQnk8sRUhy1VvYfztxSuR6oHu0o">
                    <div class="form-group form-content1">
                        <label class="control-label col-sm-4" for="institute_name">Medical Collage:</label>
                        <select class="form-select" id="institute_name" name="medical_college_id" required>
                            <option value="">None</option>
                            <option value="1">National University of Bangladesh</option>
                            <option value="2">Brac University</option>
                        </select>
                        <input type="hidden" name="new_medical_college" id="new_medical_college">
                    </div>

                    <div class="form-group form-content1">
                        <label class="control-label col-sm-4" for="admission_year">Admission Year:</label>
                        <select class="form-select" id="admission_year" placeholder="Admission Year:"
                            name="admission_year" required>
                            <option value="">None</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>

                    <div class="form-group Last-child">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn update-btn">Update</button>
                        </div>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    <footer>
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
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#university").click(function () {
                $("#d-div").show();
                $("#a-div").hide();
            });

            $("#medical").click(function () {
                $("#a-div").show();
                $("#d-div").hide();
            });

            $(".select2").select2({
                allowClear: true,
                placeholder: "Select Institute",
                tags: true,
                tokenSeparators: [',']
            });

            $("#institute_name").on("change", function () {
                console.log($(this).val());
            })


        });

        $('#admission_year').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

</body>

</html>