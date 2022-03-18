<?php
	include 'libs/db.php';
	unset($_SESSION['user']);
	header('Location: index.php');
?>