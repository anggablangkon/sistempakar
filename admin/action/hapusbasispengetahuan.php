<?php
	session_start();
	include '../../function/connection.php';
	//made in : cecep Munajat

	$id = $_GET['id'];

	$delete = mysqli_query($connection, "DELETE FROM tbl_basispengetahuan WHERE id = '$id' ");
	//meredirect halaman
	echo "<META HTTP-EQUIV='Refresh' content='0; URL=../basispengetahuan.php'>";