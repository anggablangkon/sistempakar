<?php

	include '../../function/connection.php';


	$kdpenyakit 		= $_POST['kdpenyakit'];
	$nmpenyakit 		= $_POST['nmpenyakit'];

	$query 	= mysqli_query($connection, "UPDATE tbl_penyakit SET nm_penyakit = '$nmpenyakit' WHERE kd_penyakit = '$kdpenyakit'");
	header("location: ../datapenyakit.php");
