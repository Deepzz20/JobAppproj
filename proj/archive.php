<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="archive1.css">
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
    <div id="container">
        <!-- <div class="container1"> -->
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM add_job WHERE archived=1";
        // Prepare and bind SQL statement
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='cont1'>";
                echo "<p>Title: " . $row['title'] . "</p>";
                echo "<p> Description: " . $row["des"] . "</p>";
                echo "<p>Location: " . $row["loc"] . "</p>";
                echo "<p>Date of Expiry: " . $row["date"] . "</p>";
                echo "<p>Contact Number: " . $row["num"] . "</p>";
                echo "<p>Contact Email: " . $row["email"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
    </div>
</body>

</html>