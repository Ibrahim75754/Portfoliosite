<?php 
    $con=mysqli_connect('localhost','root','','corporx');

    $email=$_GET["email"];
    $password=md5($_GET["password"]);

    $get_info = mysqli_query($con,"SELECT * FROM registration WHERE email='$email' AND password='$password'");

	if(mysqli_affected_rows($con)>0){

		setcookie("user", $email, time() + (86400*7));
		header("location: home.php");


	}
	else{
		header("location: login.php?wrong");
	}
?>
