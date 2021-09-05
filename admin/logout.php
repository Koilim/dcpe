<?php
	session_start();
	session_destroy();
	session_unset();
	unset($_SESSION['adminID']);
	unset($_SESSION['adminUsername']);

	unset($_SESSION['userID']);
	unset($_SESSION['userUsername']);

	header('Location:../login.php?a=2');
?>