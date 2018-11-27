<?php
require_once "connection.php";

if (isset($_POST['submit'])){

    $username = $_POST["name"];
    $age = $_POST["age"];
    $exp = $_POST["experience"];
    
    $sql = "INSERT INTO decorators (dName,dAge,dExp) VALUES ('$username', '$age','$exp')";
    $result = mysqli_query($conn, $sql);
    }
    ?>
<!DOCTYPE html>
<html>
<title>Admin</title>

<head> 
    <link rel="stylesheet" href="../css/adduser.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>

    

    <h3>Adding User</h3>

<div class="container">
    <form action="adduserDecorating.php" method="POST">   
    <label for="id">USER_ID</label>
    <input type="text" id="id" name="id" placeholder="Enter id..">
    
    <label for="name">NAME</label>
    <input type="text" id="fname" name="name" placeholder="Enter name..">


    <label for="address">ADDRESS</label>
    <input type="text" id="address" name="address" placeholder="Enter address..">

    <label for="age">AGE</label>
    <input type="text" id="age" name="age" placeholder="Enter age..">

    <label for="experience">Experience</label>
    <input type="text" id="experience" name="experience" placeholder="Enter experience in years..">

    <input type="submit" name="submit" type="submit" value="Submit">
  </form>
</div>

</body>
</html>