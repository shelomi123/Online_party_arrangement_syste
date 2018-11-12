<?php

    //php
    $dbservername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "semicolan";

    $connection = mysqli_connect($dbservername, $dbUsername, $dbPassword, $dbName);
    if($connection->connect_error){
        die("Connection failed".$connection->connect_error);
    }




    $user_id = $_POST['id'];
    $user_name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "INSERT INTO login (user-id,user-name,password) VALUES ('$id','$name','$password')";
    mysqli_query($connection, $sql);//passing sql

?>
