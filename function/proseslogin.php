<?php
	session_start();
	
	include 'connection.php'; 

	//membuat proses untuk login kedalam sistem
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	//membuat perintah login dengan membandingkan kedalam data yang ada dalam tbl_admin
	$ceklogin = mysqli_query($connection, "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'");
	$datalogin = mysqli_fetch_array($ceklogin);

	if($username == $datalogin['username'] && $password == $datalogin['password'])
	{
		$_SESSION['level'] = 'ADMIN';
		header("location: ../admin/index.php");
	}else{
		// header("location: ../login.php");
		echo "string";
	}

