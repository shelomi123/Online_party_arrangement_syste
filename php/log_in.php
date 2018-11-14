<?php

    //php
    $dbservername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "aaa";

    $connection = mysqli_connect($dbservername, $dbUsername, $dbPassword, $dbName);
    if($connection->connect_error){
        die("Connection failed".$connection->connect_error);
    } else {
    }

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE uname= '" . $user_name . "' AND password='" . $password . "' ";
    
    $result = mysqli_query($connection, $sql);//passing sql
    
    if ($result) {
        $num_of_rows = mysqli_num_rows($result);
        echo $num_of_rows;
        if($num_of_rows == 1){
            echo " success";
            header('Location: ../html/home.html');
        }else{
            echo "invalid usrename or password";

        }
    } else {
        echo "Query failed";
    }
     
?>