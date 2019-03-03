<?php

	include '../../function/connection.php';


	$kdgejala 		= $_POST['kdgejala'];
	$nmgejala 		= $_POST['nmgejala'];

	$query 			= mysqli_query($connection, "UPDATE tbl_gejala SET nama_gejala = '$nmgejala' WHERE kd_gejala = '$kdgejala'");
	header("location: ../datagejala.php");
