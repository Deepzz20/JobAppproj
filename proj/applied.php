<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
}

// Get the job title and user ID from session variables
$title1 = $_SESSION["title"];

// Display the job title and user ID
echo "title1: " . $title . "<br>";
?>
