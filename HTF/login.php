<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Log in / Sign up</title>
  
</head>
<body>
    <div class="Thing">
        <div class="form-box">
            <div class="Button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                <button type="button" class="toggle-btn" onclick="signup()">Sign up</button>
            </div>
            <div class="social-icons">
                <img src="gmail.png">
                <img src="fb.png">
                <img src="twitter.png">
            </div>
            <form  action="home.php"method="post" id="login"class="input-section">
                <input type="text" class="input-field" name="user" placeholder="User ID">
                <input type="password" class="input-field" name="password" placeholder="Enter Password">
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log In</button>
            </form>
            <form  id="signup"class="input-section">
                <input type="text" class="input-field" placeholder="User ID"required>
                <input type="email" class="input-field" placeholder="Email ID"required>
                <input type="password" class="input-field" placeholder="Enter Password"required>
                <input type="checkbox" class="check-box"><span>I agree to terms & conditions</span>
                <button type="submit" class="submit-btn">Sign up</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("signup");
        var z = document.getElementById("btn");

        function signup(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>





</body>
</html>



