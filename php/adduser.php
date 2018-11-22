<?php
$id = $_POST["id"];
$username = $_POST["name"];
$age = $_POST["age"];
$exp = $_POST["experience"];

$conn = mysqli_connect("localhost","root","");
if(!conn)
{
    die('error'.mysqli_error());
}

mysqli_select_db("aaa",$conn);
$sql = "INSERT INTO caters(id,cName,cAge,cExp) VALUES('$id','$username',$age','$exp')";

if(!mysqli_query($sql,$conn))
{
    die('error inserting'.mysqli_error);
}

else{
    echo "success";
}
$conn->close();

?>
<html>
<title>Admin</title>

<head>
    <link rel="stylesheet" href="../image/admin.png">
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
    <form action="adduser.php" method="POST"></form>    
    
    <label for="id">USER_ID</label>
    <input type="text"  name="id" placeholder="Enter id.." value="">

    <label for="name">NAME</label>
    <input type="text" name="name" placeholder="Enter name..">


    <label for="address">ADDRESS</label>
    <input type="text" name="address" placeholder="Enter address..">

    <label for="age">AGE</label>
    <input type="text" name="age" placeholder="Enter age..">

    <label for="Experience">EXPERIENCE</label>
    <input type="text" name="experience" placeholder="Your Experience In years">

    <button type="submit" name="submit">Submit</button>
  </form>
</div>

</body>
</html>