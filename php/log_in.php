<?php
session_start();

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
            $query = mysqli_fetch_assoc($result);
            // Check username and password match
            if ($query['uname'] == 'admin') {
                // Set username session variable
                $_SESSION['uname'] = $_POST['uname'];
                // Jump to secured page
                header('Location: ../html/admin.html');
            }
            elseif ($query['uname'] == 'user') {
                // Set username session variable
                $_SESSION['uname'] = $_POST['uname'];
                // Jump to secured page
                header('Location: ../html/home.html');
            }
            else {
                // Jump to login page
                header('Location: ../html/home.html');
            }
        }else{
            echo "invalid usrename or password";

        }
    } else {
        echo "Query failed";
    }
     
?>