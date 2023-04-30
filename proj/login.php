<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container1">
        <div class="image">
            <img src="thollai.jpeg">
        </div>
        <form class="form1" action="login1.php" method="post">
            <h3>Welcome Back!</h3><br>
            <div class="input-area">
                <i class="icon fas fa-envelope"></i>
                <input type="email" placeholder="Email ID" id="email" name="email"><br>
            </div>
            <div class="input-area">
                <i class="icon fas fa-lock"></i>
                <input type="password" placeholder="Password" id="password" name="password"><br>
            </div>
            <div class="btn-grp1">
                <button class="btn1" type="submit">Login</button>
                <button class="btn1" type="button" onclick="signup()">Sign Up</button>
            </div>
            <script>
                function signup() {
                    window.location.href = "signup.php";
                }
            </script>
        </form>
</body>

</html>