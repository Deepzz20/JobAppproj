<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
	header("location: login.php");
}

// Get the job title and user ID from query parameters
$title = $_GET["title"];

// Store the data in session variables
$_SESSION["title"] = $title;

// Redirect to the application form page
header("Location: applied.php");
exit();
?>