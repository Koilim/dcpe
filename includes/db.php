
<?php
include("connect_db.php");

try {
  $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo " ";
} catch(PDOException $e) {
  echo "Echec de la connexion! " . $e->getMessage();
}
?>