
<?php
if(isset($_FILES['excel']['name'])){
	include "../../../includes/connect_db.php";
	$con=mysqli_connect("localhost","root","","bdd");
	include "xlsx.php";
	 
	if($con){
		mysqli_query($con,"ALTER TABLE `ouverture_de_compte` DROP `id`");

		$excel=SimpleXLSX::parse($_FILES['excel']['tmp_name']);
		echo "<pre>";	
		// print_r($excel->rows(1));
		print_r($excel->dimension(2));
		print_r($excel->sheetNames());
        for ($sheet=0; $sheet < sizeof($excel->sheetNames()) ; $sheet++) { 
        $rowcol=$excel->dimension($sheet);
        $i=0;
        if($rowcol[0]!=1 &&$rowcol[1]!=1){
		foreach ($excel->rows($sheet) as $key => $row) {
			//print_r($row);
			$q="";
			foreach ($row as $key => $cell) {
				//print_r($cell);echo "<br>";
				if($i==0){
					$q.=$cell. " varchar(50),";
				}else{
					$q.="'".$cell. "',";
				}
			}
			if($i==0){
				//$query="CREATE table ".$excel->sheetName($sheet)." (".rtrim($q,",").");";
			}else{
				$query="INSERT INTO `ouverture_de_compte`  values (".rtrim($q,",").");";
			}
			
			echo $query;
			if(mysqli_query($con,$query))
			{
				echo "true";
			}
			echo "<br>";
			$i++;
		}
	}
		}
	}
	if(mysqli_query($con,$query))
			{
				mysqli_query($con,"ALTER TABLE `ouverture_de_compte` ADD `id` INT NOT NULL AUTO_INCREMENT AFTER `Observation`, ADD PRIMARY KEY (`id`);");
				header('Location:../../../import_clients.php?a=1');
				$db=null;
			}else{
				$db=null;
				header('Location:../../../import_clients.php?a=0');
			}
}

?>