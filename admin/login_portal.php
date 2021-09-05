<?php

if(isset($_POST['ok'])){

    include('../includes/db.php');

	$username=$_POST['username'];

	session_start();
	$_SESSION['username']=$username;
	$_SESSION['password']=$_POST['password'];

	foreach($db->query("select username from admin where 1") as $adminUsername){
		if($username==$adminUsername[0]){
			header("Location:adminPP/login.php");
		}else{
			foreach($db->query("select username from user where 1") as $userUsername){
				if($username==$userUsername[0]){
					header("Location:userPP/login.php");
				}else{
					header("Location:../login.php?a=0");
				}
			}
		}
	}

	/*foreach($db->query("select username from user where 1") as $userUsername){
		if($username==$userUsername[0]){
			header("Location:userPP/login.php");
		}else{
			header("Location:adminPP/login.php");
		}
	}*/

	
}
?>