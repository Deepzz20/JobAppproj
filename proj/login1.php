<?php
$conn = mysqli_connect("localhost", "root", "", "project");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
// $opt = $_REQUEST['opt'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

// We are going to insert the data into our sampleDB table
$sql = "SELECT *  FROM signup WHERE email='$email'";
$result = mysqli_query($conn, $sql);

// Check if the query is successful
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($row['password'] == $password) {
        // Login successful, redirect to the dashboard page
        $_SESSION["loggedin"] = true;
        header("Location: joblist.php");
    } else {
        // Login failed, display an error message
        echo "Invalid password";
    }
} else {
    // Login failed, display an error message
    echo "Invalid login credentials";
}

// Close the database connection
mysqli_close($conn);
?>