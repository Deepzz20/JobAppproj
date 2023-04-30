<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST["title"];
$archived = $_POST["archived"];

// Update record in database
$sql = "UPDATE add_job SET archived='" . $archived . "' WHERE title='" . $title . "'";
if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>