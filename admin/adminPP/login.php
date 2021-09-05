
<?php
 include('../../includes/db.php');
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
   $password_crypt = md5($password);

$sql = "SELECT * FROM admin WHERE username = :name AND password = :pass";

try {
    $statement = $db->prepare($sql);
    $statement->execute(array('name' => $username, 'pass' => $password_crypt));
    $row = $statement->fetch();
   if ($row['username'] == $username && $row['password'] == $password_crypt){
       session_start();
       $_SESSION['adminID']=$row['id'];
       $_SESSION['adminUsername']=$row['username'];

	 
	   header("Location:../../index.php?cnx=1");
	   
	   $dbh=null;
   
  }else{
	$db=null;
  session_destroy();
   header("Location:../../login.php?a=0");
        }           
}
catch(PDOException $e) {
    echo "Something went wrong: ".$e->getMessage();
	$db=null;
}
?>
