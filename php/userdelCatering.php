<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aaa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = mysqli_query($db, "DELETE FROM photography WHERE id=$id");

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

<html>
<title>Admin</title>

<head>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="adduser.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <form action="/action_page.php">
          <label for="name">NAME</label>
          <input type="text" id="fname" name="name" placeholder="Enter name..">
      
          <label for="id">USER_ID</label>
          <input type="text" id="id" name="id" placeholder="Enter id..">
        
          <input type="submit" value="Submit">

        </form>
    </div>

</body>
</html>