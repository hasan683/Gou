<!DOCTYPE html>
<html>

<head>
    <title>Font Awesome Icons</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/gou.css">

</head>

<body>
    <div class="container">
        <div class="align">
            <div class="card mt-5">
                <div class="head">
                    <div></div>
                    <a id="login" class="selected" href="#login"> Login</a>
                    <a id="register" class="register" href="#register">Register</a>
                </div>
                <div class="tabs">
                    <from>
                        <div class="inputs">
                            <div class="input">
                                <input type="email" class="form-control" placeholder="Email or Phone">
                            </div>
                            <div class="input">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <a href="">Forgot Password</a>
                            <lebel class="checkbox">
                            <span>Remember Me</span>
                            </lebel>
                        </div>
                        <button>Login</button>
                        <p>Don't have an account?</p>
                        <button>Register Now</button>
                    </from>
                    <from>
                        <div class="inputs">
                            <div class="input">
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>
                            <div class="input">
                                <input type="number" class="form-control" placeholder="Phone">
                            </div>
                            <div class="input">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="input">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"><span class="agree-access">I agree to the
                                <strong class="text-warning"> Terms of Use</strong> and
                                <strong class="text-warning"> Privacy Policy</strong></span>
                            </label>
                        </div>
                        <button>Register</button>
                        <p>Already have an account?</p>
                        <button>Login Now</button>
                    </from>
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/login.js"></script>
</body>

</html>