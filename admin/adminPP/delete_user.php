<?php 

if(isset($_POST['del_u'])){
    include('../../includes/db.php');
    
    $userID=$_POST['userID'];
	
   
	
    $r=$db->exec("DELETE FROM ouverture_de_compte WHERE id='$userID'");
	
	if($r){
		header("Location:../../index.php?del=1&uid=$userID");
		$db=null;
	}else{
		$db=null;
		header("Location:../../index.php?del=0&uid=$userID");
	}
	
}

 ?>