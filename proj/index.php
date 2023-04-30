<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="joblist.css">
    <script src="index.js"></script>
</head>

<body>
    <?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "project";
    $conn = new mysqli($hostName, $userName, $password, $databaseName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $query = "SELECT title, des, loc, date, num, email FROM add_job";
    $result = mysqli_query($conn, $query);
    ?>

    <div class="navbar1">
        <button id="open-btn"><i class="fa-solid fa-bars"></i></button>
    </div>
    <nav id="navbar">
        <ul>
            <li><a href="joblist.php">Job Description</a></li>
            <li><a href="add.php">Add Job</a></li>
            <li><a href="archive.php">Archive</a></li>
            <li><a href="applied.php">Applied</a></li>
            <li><a href="apply.php">Apply</a></li>
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
    <div class="container">
        <div class="drag-container" ondrop="drop(event)" ondragover="allowDrop(event)">
            <!-- <div class="drag-element" draggable="true" ondragstart="drag(event)"> -->

            <?php
            // Connect to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "project";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Select data from the table
            
            $query = "SELECT title, des, loc, date, num, email FROM add_job WHERE archived = 0";
            $result = mysqli_query($conn, $query);
            // Display data in containers
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    // echo "<div class='drag-container' ondrop='drop(event)' ondragover='allowDrop(event)'>";
                    if ($row['archived'] == 0) {
                        echo "<div class='drag-element' draggable='true' ondragstart='drag(event)'>";
                        echo "<p>Title: " . $row['title'] . "</p>";
                        echo "<p> Description: " . $row["des"] . "</p>";
                        echo "<p>Location: " . $row["loc"] . "</p>";
                        echo "<p>Date of Expiry: " . $row["date"] . "</p>";
                        echo "<p>Contact Number: " . $row["num"] . "</p>";
                        echo "<p>Contact Email: " . $row["email"] . "</p>";
                        echo "<button id='btn' onclick='archive(\"" . $row['title'] . "\")'>Archive</button>";
                        echo "<button id='btn1' onclick='apply()'>Apply</button>";
                        echo "</div>";
                        // echo "</div>";
                    } else {

                    }
                }
            } else {
                echo "0 results";
            }

            // Close connection
            $conn->close();
            ?>
        </div>
    </div>
    </div>
    <script>
        let draggedElement = null;

        function allowDrop(event) {
            event.preventDefault();
        }

        function drag(event) {
            draggedElement = event.target;
        }

        function drop(event) {
            event.preventDefault();
            if (event.target.classList.contains("drag-element")) {
                event.target.parentNode.insertBefore(draggedElement, event.target.nextSibling);
            } else {
                event.target.appendChild(draggedElement);
            }
        }

        // function archive() {
        //     var div = document.getElementById("drag");
        //     div.parentNode.removeChild(div);
        // }

        // function archive() {
        //     var myDiv = document.getElementById("drag");
        //     myDiv.style.display = "none"; // hide the div

        //     // create a form with the div content as a value
        //     var form = document.createElement("form");
        //     form.action = "insert.php"; // specify the URL of the other page
        //     form.method = "post";
        //     var input = document.createElement("input");
        //     input.type = "hidden";
        //     input.name = "movedDivContent";
        //     input.value = myDiv.innerHTML;
        //     form.appendChild(input);
        //     document.body.appendChild(form);

        //     // submit the form to send the div content to the other page
        //     form.submit();
        // }
        function archive(title) {
            var archived = 1;
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "insert.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    window.location.href = 'archive.php';
                }
            };
            xhr.send("title=" + title + "&archived=" + archived);
            var myDiv = document.getElementById("drag");
            myDiv.style.display = "none";
        }
        function apply(title) {
            var title1 = title;
			window.location.href = "removeData.php?tile1=" + title ;
        }



    </script>
</body>

</html>