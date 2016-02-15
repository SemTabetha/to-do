<?php

	define("SERVERNAME", "localhost");
	define("USERNAME", "root");
	define("PASSWORD", "");
	define("DBNAME", "test");

	$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
	//$conn = mysqli_connect(localhost, szee_zee, IA1eWf8nSB, szee_tolist);
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}