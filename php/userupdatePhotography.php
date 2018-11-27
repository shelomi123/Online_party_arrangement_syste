<?php
require_once "connection.php";

if (isset($_POST['update'])){
$id = $_POST["id"];
$name = $_POST["upname"];
$age = $_POST["upage"];
$exp = $_POST["exp"];
$query = "UPDATE photographers SET pName = '$name' , p-age = '$age' , pExp = '$exp' WHERE id = $id;";
    
if (mysqli_query($conn, $query)) echo 'successfully Updated !';
else echo "error!";
echo mysqli_error($conn);
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<title>Admin</title>

<head>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/adduser.css">
</head>

<body>

    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>

    <h3>Updating User</h3>

<div class="container">
  <form action="userupdatePhotography.php" method="post">
    <label for="id">ID</label>
    <input type="text" id="id" name="id" placeholder="Enter ID..">

    <label for="upname">UPDATE NAME</label>
    <input type="text" id="upname" name="upname" placeholder="Enter name..">

    <label for="upaddress">UPDATE ADDRESS</label>
    <input type="text" id="upaddress" name="upaddress" placeholder="Enter address..">

    <label for="upage">UPDATE AGE</label>
    <input type="text" id="upage" name="upage" placeholder="Enter age..">

    <label for="uptelephone">Experience</label>
    <input type="text" id="exp" name="exp" placeholder="Enter Experience in Years..">

    <input type="submit" value="Submit" name="update">
  </form>
</div>

</body>
</html>