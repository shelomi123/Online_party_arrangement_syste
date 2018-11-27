<?php
require_once "connection.php";

if (isset($_POST['submit'])){
$id = $_POST["id"];
$query = "DELETE FROM decorators WHERE id=$id;";
mysqli_query($conn,$query);
mysqli_close($conn);
}
?>
<html>
<title>Admin</title>

<head>
    <link rel="stylesheet" href="../css/adduser.css">
</head>

<body>

    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>

    <h3>Deleting User</h3>

    <div class="container">
        <form action="userdelDecorating.php" method="post">
          <label for="name">NAME</label>
          <input type="text" id="fname" name="name" placeholder="Enter name..">
      
          <label for="id">USER_ID</label>
          <input type="text" id="id" name="id" placeholder="Enter id..">
        
          <input type="submit" value="Submit" name="submit">

        </form>
    </div>

</body>
</html>