<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aaa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['submit'])){}

$id = $_POST["id"];
$username = $_POST["cName"];
$age = $_POST["cAge"];
$exp = $_POST["cExp"];

$sql = "INSERT INTO caters (id, cName, cAge,cExp)
VALUES ('$id', '$username', '$age','$exp')";
}

$conn->close();

?>