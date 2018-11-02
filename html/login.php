<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<?php
//connect to the server and select database
$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"semicolan");

if(! $connection){
    echo "error 11";
}

if(isset($_POST['Login'])) {
//get values passed from login.html
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $sql = "select * 
            from login 
            where Username = '".$username."'
            AND Password = '".$password."'
             LIMIT 1 ";

    $result = mysqli_query($connection,$sql);
    $row_count = mysqli_num_rows ($result);

   if ($row_count == 1){
       echo "<script>window.open('new.html','_self');</script>" ;
   }
   else{
       echo "<p>incorrect user or pass</p>";
   }
}




?>


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form"  method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>" >
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 " >
						<input required class="input100" type="text" name="Username">
						<span class="focus-input100" data-placeholder="Enter username"></span>
					</div>

					<div class="wrap-input100 " >
						<input required class="input100" type="password" name="Password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="Login">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	



</body>
</html>