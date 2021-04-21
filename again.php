<!DOCTYPE html>
<html>

<head>
    <title>Font Awesome Icons</title>
    <link rel="stylesheet" type="text/css" href="css/gou.css">

</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>

            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="user id">
                <input type="text" class="input-field" placeholder="user id">
            </form>

            <form id="register" class="input-group">
                <input type="text" class="input-field" placeholder="user id">
                <input type="text" class="input-field" placeholder="user id">
            </form>
        </div>
    </div>



    
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>

</body>

</html>