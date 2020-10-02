<?php

	setcookie("admin","",time()-(86400*7));
	header("location: login.php");

?>