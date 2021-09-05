<?php 

if(isset($_POST['ok'])){
	 include('../../includes/db.php');
	$ID=$_POST['ID'];
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	$r=$db->exec("update user set username='$username', password='$password' where id='$ID';");
	
	if($r){
		header("Location:../../edit_account.php?a=1");
		$db=null;
	}else{
		$db=null;
		header("Location:../../edit_account.php?a=0");
	}
	
}

 ?>