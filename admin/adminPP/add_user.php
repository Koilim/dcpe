<?php 

if(isset($_POST['ok'])){
    include('../../includes/db.php');
    
    $username=$_POST['username'];
	$password=md5($_POST['password']);
   
	
    $r=$db->exec("insert into user (username,password) values('$username','$password')");
	
	if($r){
		header("Location:../../add_user.php?a=1");
		$db=null;
	}else{
		$db=null;
		header("Location:../../add_user.php?a=0");
	}
	
}

 ?>