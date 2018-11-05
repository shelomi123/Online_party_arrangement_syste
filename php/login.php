<?php

    $username = $_POST['uname'];
    $password = $_POST['psw'];

    if(!empty($username) || !empty($password)){

        $host="localhost";
        $dbUsername="root";
        $dbPassword="";
        $dbname="semicolan";

        //create connection
        $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);

        if(mysqli_connect_error()){
            die('Connect error('.mysqli_connect_errno().')'. mysqli_connect_error());
        }else{
                $SELECT = "SELECT user-name From semicolan Where user-name = ? Limit 1";
                $INSERT = "INSERT Into semicolan (user-name,password) values(?,?)";

                //prepare statement
                $stmt = $conn->prepare($SELECT);
                $stmt ->blind_param("s",$user-name);
                $stmt->execute();
                $stmt ->blind_result($email);

        }

    }else{
        echo "all fields are required to be filled";
        die();
    }

?>

