<?php 

	//membuat destroy login
	session_start();
	session_destroy();

	header("location: ../../login.php");