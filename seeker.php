<?php
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="seeker.css">
    <title>Seeker</title>
</head>
<body>
    <h1 class="heading">Hello Seeker!</h1>
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>Log In</h2>
                    <form action="seekerlogin.php" method="POST">
                        <input type="email" class="input-box" name="Email" id="Email" placeholder="Email" required>
                        <input type="password" class="input-box" name="psw" id="psw" placeholder="Password" required>
                        <button type="submit" class="submit-btn">Log In</button>
                        <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo '<span style="color: whitesmoke;  font-size: 13px;
                        margin-left: 10px;">Incorrect password or email</span><br>';
                    }
                    ?>  
                        <input type="checkbox" name="rem" id="r"><span>Remember Me</span>
                    </form>
                    <button type="button" class="btn" onclick="Signup()">I'm new here</button>
                    <a href="">Forgot password</a>
                </div>
                <div class="card-back">
                    <h2>Sign up</h2>
                    <form action="seekersignup.php" method="POST">
                        <input type="text" class="input-box" name="Name"  placeholder="Your name" required>
                        <input type="email" class="input-box" name="Email"  placeholder="Your email" required>
                        <input type="password" class="input-box" name="psw"  placeholder="Password" required>
                        <button type="submit" class="submit-btn">Sign In</button>
                        <input type="checkbox" name="rem"><span>Remember Me</span>
                    </form>
                    <button type="button" class="btn" onclick="LogIn()">I've an account</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var card = document.getElementById("card");
        function LogIn() {
            card.style.transform = "rotateY(0deg)";
        }
        function Signup() {
            card.style.transform = "rotateY(180deg)";
        }
    </script>
</body>
</html>
<?php
    unset($_SESSION["error"])
?>