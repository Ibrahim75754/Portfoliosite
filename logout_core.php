<?php

	setcookie("user","",time()-(86400*7));
	header("location: login.php")

?>