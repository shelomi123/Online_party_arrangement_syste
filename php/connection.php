<?php 
       $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysqli_select_db ('aaa',$conn) or die("unable to connect to database"); 
?>   