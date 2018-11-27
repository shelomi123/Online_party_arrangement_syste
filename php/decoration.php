<?php
session_start();
if ($_SESSION['testcomplete'] == 'yes') {
    header("Location:../html/home.html");
}
?>
<html>
<head> 
   <meta charset="utf-8" />
    <title>Our Decorators</title>
    <link rel="stylesheet" href="../css/photography.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2 align="center">Choose your Decorator!!</h2>

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

//retrieving all data from photographers table
$sql = "SELECT * FROM decorators";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
<table class="table">
    <tr>  
        <th>Decorator id </th>  
        <th>Name </th>  <th>Age </th>  
        <th>Exp in yrs</th>  
        <th>Select</th>
    </tr>
    <?php 
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
    <tr>
        <td><?php echo $row["id"]?></td>
        <td><?php echo $row["dName"]?></td>
        <td><?php echo $row["dAge"]?></td>
        <td><?php echo $row["dExp"]?></td>
        <td><input type="checkbox" name="selected" value="<?php echo $row["d-id"]?>"></td>
    </tr>
    <?php } ?>
</table>
    <?php
    } else {
        echo "0 results";
    }
    $conn->close();
?> 
    
</body>
</html>