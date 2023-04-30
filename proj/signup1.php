<?php
$conn = mysqli_connect("localhost", "root", "", "project");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$opt = $_REQUEST['opt'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$num = $_REQUEST['num'];
$dob = $_REQUEST['dob'];
$age = $_REQUEST['age'];
$password = $_REQUEST['password'];
$confirmpassword = $_REQUEST['confirmpassword'];

// We are going to insert the data into our sampleDB table
$sql = "INSERT INTO signup VALUES ('$opt','$name',
            '$email','$num','$dob','$age', '$password', '$confirmpassword')";

// Check if the query is successful
if (mysqli_query($conn, $sql)) {
    header("Location: joblist.php");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);