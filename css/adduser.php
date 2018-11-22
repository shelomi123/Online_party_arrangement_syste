<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("test", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$id = $_POST['id'];
$address = $_POST['address'];
$age = $_POST['age'];
$telephone = $_POST['telephone'];
if($name !=''||$id !=''){
//Insert Query of SQL
$query = mysql_query("insert into cateringsupplier(name,id,address,age,telephone) values ('$name', '$id', '$address','$age', '$telephone')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>