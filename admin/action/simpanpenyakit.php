<?php

	include '../../function/connection.php';

	//made in : cecep Munajat

	$kdpenyakit 	= $_POST['kdpenyakit'];
	$nmpenyakit 	= $_POST['nmpenyakit'];
	$dfpenyakit 	= $_POST['dfpenyakit'];
	$slpenyakit		= $_POST['slpenyakit'];


	//memasukan kedalam tabel yang ada pada database

	$query 	= mysqli_query($connection, "INSERT INTO tbl_penyakit VALUES('$kdpenyakit','$nmpenyakit','$dfpenyakit','$slpenyakit')");

		header("location: ../datapenyakit.php");
