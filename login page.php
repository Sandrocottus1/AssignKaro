
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2 class="logo"><a href="#">AssignmentKaro.com</a></h2>
        <nav class="navigation">
            <a href="#">HOME</a>
            <a href="#">SERVICES</a>
            <a href="#">CONTACT</a>
            <button class="btnLogin-popup">Join us</button>
        </nav> 
    </header>
    <div class="wrapper">
        <!-- Login-->
        <div class="form-box login">
            <h2><centre>Login</centre></h2>
           
            <form action="server2.php" method="post">
                <div class="input-box">
                    
                    <input type="text" required name="username1">
                    <label>Username</label>
                </div> 
                <div class ="input-box">
                    
                    <input type="password" required name="password_11">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    Remember me</label>
                    <a href="#">Forgot password?</a>
                    </div>
                        <button type="submit" class="btn" name="login_Btn">Login</button>
                    <div class="login-register">
                        <p>Don't have an account ?
                            <a href="#"  class="register-link">Sign Up</a></p>
                </div>
            </form>
        </div>
        <!--Register-->
        <div class="form-box register">
            <h2><centre>Register</centre></h2>
            <form action="server.php" method="post">
                
                <div class="input-box">
                    
                    <input type="text" required  id="username1" name="username1">
                    <label>Username</label>
                </div>
                <div class ="input-box">
                    <input type="Mail" required name="email1" id="email1">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" required name="password_11" id="password_11">
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <input type="password" required name="password_22" id="password_22">
                    <label>Confirm Password</label>
                </div>
                        <button type="submit" class="btn">Sign up</button>
                <div class="login-register">
                    <p>Already have an account ? <a href="#" 
                    class="login-link">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

