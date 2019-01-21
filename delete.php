<?php
	require "connection.php";

	$pdo_statement = $pdo_conn->prepare("DELETE FROM users where id =" .$_GET["id"]);
	$pdo_statement->execute();
	header('location:index.php');
?>