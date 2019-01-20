<?php
	$username = "admin";
	$password = "projectsaathi";
	$pdo_conn = new PDO('mysql:host=localhost;dbname=pdo_crud', $username, $password);
	echo "DB connected";
?>