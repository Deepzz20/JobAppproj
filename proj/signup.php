<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container1">
        <div class="image">
            <img src="signup.jpg">
        </div>
        <form class="form1" action="signup1.php" method="post">
            <h3>SIGN UP</h3>
            <div class="input-area" id="opt">
                <input type="radio" name="opt" value="option1" id="opt1">
                <label for="option1">Terraformers</label><br>
                <input type="radio" name="opt" value="option2" id="opt2">
                <label for="option2">Applicants</label><br>
            </div>
            <div class="input-area">
                <i class="fas fa-user-alt"></i>
                <input type="text" placeholder="Name" id="name" name="name"><br>
            </div>
            <div class="input-area">
                <i class="icon fas fa-envelope"></i>
                <input type="email" placeholder="Email ID" id="email" name="email"><br>
            </div>
            <div class="input-area">
                <i class="fa fa-phone"></i>
                <input type="number" placeholder="Phone number" id="num" name="num"><br>
            </div>
            <div class="input-area">
                <i class="fas fa-calendar-alt"></i>
                <input type="date" placeholder="DOB" id="dob" name="dob"><br>
            </div>
            <div class="input-area">
                <i class="fa-solid fa-hashtag"></i>
                <input type="number" placeholder="Age" id="age" name="age"><br>
            </div>
            <div class="input-area">
                <i class="icon fas fa-lock"></i>
                <input type="password" placeholder="Password" id="password" name="password">
            </div>
            <div class="input-area">
                <i class="icon fas fa-lock"></i>
                <input type="password" placeholder="confirmPassword" id="confirmpassword" name="confirmpassword">
            </div>
            <div class="btn-grp1">
                <button class="btn1" type="submit" value="submit">Continue</button>
            </div>
        </form>
</body>

</html>
