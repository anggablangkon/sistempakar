<?php

	if (!isset($_SESSION['level'])) {
	    die("Login dahulu");
	}
	if($_SESSION['level']!="ADMIN"){
	    die("Anda Bukan Admin");
	}    

