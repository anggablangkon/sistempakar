<?php
	session_start();
	include '../../function/connection.php';
	//made in : cecep Munajat

	$_SESSION['message'] = 'success';
	$kdgejala = $_GET['kdgejala'];

	$delete = mysqli_query($connection, "DELETE FROM tbl_gejala WHERE kd_gejala = '$kdgejala' ");
	//meredirect halaman
	echo "<META HTTP-EQUIV='Refresh' content='0; URL=../datagejala.php'>";