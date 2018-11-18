<?php

    //php
    $dbservername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "aaa";

    /* making connection with data base*/
    $connection = mysqli_connect($dbservername, $dbUsername, $dbPassword, $dbName);
    if($connection->connect_error){
        die("Connection failed".$connection->connect_error);
    } else {
    }

    /*taking variebles */
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE uname= '" . $user_name . "' AND password='" . $password . "' ";
    
    $result = mysqli_query($connection, $sql);//passing sql
    
    if ($result) {
        $num_of_rows = mysqli_num_rows($result);
        echo $num_of_rows;
        if($num_of_rows == 1){
             echo " success";  /* only one row in successfull login*/
            header('Location: ../html/home.html');  /*directing homepage if login successfull */
        }else{
            echo "invalid usrename or password";

        }
    } else {
        echo "Query failed";
    }

    $query = mysql_fetch_array($login);
    // Check username and password match
    if ($query['user'] == 'admin') {
    // Set username session variable
    $_SESSION['username'] = $_POST['username'];
    // Jump to secured page
    header('Location:newAdmin.php');
    }
    elseif ($query['user'] == 'user') {
    // Set username session variable
    $_SESSION['username'] = $_POST['username'];
    // Jump to secured page
    header('Location:user.php');
    }
    else {
    // Jump to login page
    header('Location: ind.php');
    }
     
?>