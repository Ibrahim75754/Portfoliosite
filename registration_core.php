<?php 
    $con=mysqli_connect('localhost','root','','corporx');

    $name=$_GET["name"];
    $email=$_GET["email"];
    $password=md5($_GET["password"]);


    $insertQ=mysqli_query($con,"INSERT INTO registration values (null,'$name','$email','$password')");

    if($insertQ==true){
    	header("location: ../basic-sign-up.php?success");
    }
?>