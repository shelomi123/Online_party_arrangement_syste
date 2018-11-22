<?php
include "connection.php";

if(isset($_POST['submit'])){
    addUser();
}

function addUser(){

    $id = e($_POST['id']);
    $username = e($_POST['c-name']);
    $age = e($_POST['c-age']);
    $exp = e($_POST['c-exp']);

$sql = "INSERT INTO caters (id,c-name, c-age, c-exp)
VALUES  ('$id','$username','$age','$exp')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
$conn->close();
?>