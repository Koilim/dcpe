<?php

if(isset($_POST['ok'])){
	$db=new PDO('sqlite:../db/db.sqlite');

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $password=md5($_POST['password']);
	
foreach($db->query("select phone from user") as $row){
    $phonetest=$row[0];
}
    if ($phonetest===$phone){
        echo"<script>window.location='../../register.php?a=2';</script>";
    }else{

    $sql="INSERT INTO user (name,phone,password) VALUES ('$name','$phone','$password')";

    $r=$db->exec($sql);

    if($r){
        echo"<script>window.location='../../register.php?a=1';</script>";
        $db=null;
    }else{
        $db=null;
        echo"<script>window.location='../../register.php?a=0';</script>";
    }
}
}

?>