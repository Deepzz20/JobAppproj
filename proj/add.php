<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="add1.css">
</head>

<body>
    <div class="navbar1">
        <button id="open-btn"><i class="fa-solid fa-bars"></i></button>
    </div>
    <nav id="navbar">
        <ul>
            <li><a href="joblist.php">Job Description</a></li>
            <li><a href="add.php">Add Job</a></li>
            <li><a href="archive.php">Archive</a></li>
            <li class="logout"><a href="login.php">Log Out</a></li>
        </ul>
        <button id="close-btn"><i class="fa-solid fa-right-from-bracket"></i></button>
    </nav>
    <div class="cont">
        <div class="box3">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <script>
        var openBtn = document.getElementById("open-btn");
        var closeBtn = document.getElementById("close-btn");
        var navbar = document.getElementById("navbar");

        openBtn.addEventListener("click", function () {
            navbar.classList.add("open");
        });

        closeBtn.addEventListener("click", function () {
            navbar.classList.remove("open");
        });

    </script>
    <div class="container">
        <form class="form1" action="add1.php" method="post">
            <h1>Add a New Job</h1>
            <span><label>Title: </label>
                <input type="text" class="title" name="title"><br></span>
            <span><label>Description: </label>
                <input textarea="text" class="des" name="des"><br></span>
            <span><label>Location: </label>
                <input type="text" class="loc" name="loc"><br></span>
            <span><label>Deadline: </label>
                <input type="date" class="date" name="date"><br></span>
            <span><label>Contact Number: </label>
                <input type="number" class="num" name="num"><br></span>
            <span><label>Contact email: </label>
                <input type="email" class="email" name="email"><br></span>
            <input type="hidden" name="archived" value="0">
            <button type="submit">Add job</button>
        </form>
    </div>
</body>

</html>

</html>