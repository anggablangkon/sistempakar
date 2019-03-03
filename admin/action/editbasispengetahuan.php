<?php

	include '../../function/connection.php';

	$id 				= $_POST['id'];
	$kdpenyakit 		= $_POST['kdpenyakit'];
	$kdgejala 			= $_POST['kdgejala'];
	$nilaimb 			= $_POST['nilaimb'];
	$nilaimd			= $_POST['nilaimd'];

	$query 			= mysqli_query($connection, "UPDATE tbl_basispengetahuan SET kd_penyakit = '$kdpenyakit', kd_gejala = '$kdgejala', nilaimb = '$nilaimb', nilaimd = '$nilaimd' WHERE id = '$id'");

	header("location: ../basispengetahuan.php");
