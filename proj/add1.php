<?php
$conn = mysqli_connect("localhost", "root", "", "project");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$title = $_REQUEST['title'];
$des = $_REQUEST['des'];
$loc = $_REQUEST['loc'];
$date = $_REQUEST['date'];
$num = $_REQUEST['num'];
$email = $_REQUEST['email'];
$archived = $_REQUEST['archived'];

// We are going to insert the data into our sampleDB table
$sql = "INSERT INTO add_job VALUES ('$title',
            '$des','$loc','$date','$num', '$email', '$archived')";

// Check if the query is successful
if (mysqli_query($conn, $sql)) {
    header("Location: joblist.php");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);