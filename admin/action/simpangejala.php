<?php
	
	include '../../function/connection.php';

	//made in : cecep Munajat

	$kdgejala = $_POST['kdgejala'];
	$nmgejala = $_POST['nmgejala'];


		$simpandata = mysqli_query($connection, "INSERT INTO tbl_gejala VALUES ('$kdgejala','$nmgejala') ");

		header("location: ../datagejala.php");
