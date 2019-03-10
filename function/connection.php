<?php

	/* sistem ini dikembangkan oleh : cecep munajat */
	/* kebutuhan vendor lain - lain didapat di situs resmi kokitindo.com */

	$local 		= 'localhost';
	$user		= 'root';
	$pass 		= '';
	$database	= 'cecepapps';


	//membuat perintah koneksi dengan database dalam mysql
	$connection = mysqli_connect($local,$user,$pass,$database);

