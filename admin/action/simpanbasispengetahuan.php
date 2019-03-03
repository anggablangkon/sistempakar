<?php
	
	include '../../function/connection.php';

	//made in : cecep Munajat

	$kdpenyakit = $_POST['kdpenyakit'];
	$kdgejala 	= $_POST['kdgejala'];
	$mb 		= $_POST['mb'];
	$md 		= $_POST['md'];



	$simpandata = mysqli_query($connection, "INSERT INTO tbl_basispengetahuan values ('','$kdpenyakit','$kdgejala','$mb','$md')");

	header("location: ../basispengetahuan.php");
