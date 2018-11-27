<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'aaa';
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
    echo mysqli_connect_error();
}
