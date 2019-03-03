<?php
	session_start();
	include '../../function/connection.php';
	//made in : cecep Munajat

	$kdpenyakit = $_GET['kdpenyakit'];

	$delete = mysqli_query($connection, "DELETE FROM tbl_penyakit WHERE kd_penyakit = '$kdpenyakit' ");
	//meredirect halaman
	echo "<META HTTP-EQUIV='Refresh' content='0; URL=../datapenyakit.php'>";