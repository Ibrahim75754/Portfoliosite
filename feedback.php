<?php 
if(isset($_POST['name'])){
	$name=$_POST["name"];
	$email=$_POST["email"];
	$text=$_POST["message"];
	$run=mysqli_query($con,"INSERT INTO message values (null,'$name','$email','$text')"); 
	if($run=true){
		header("location: services.php?sent");
	}
}
?>