<!doctype html>
<html lang="fr">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <?php 
include("includes/header.php");
include("includes/navbar.php");
if(empty($adminID)){
	$UID=$userID;
}else{
	$UID=$adminID;
}
if(empty($UID)){
	echo("<script>window.location='login.php'</script>");
}
  ?>

<body style='background:rgba(13,169,109,255)'>

    <div class="container animate__animated animate__fadeIn ">
    	<br><br><br><br><br>

		<center>
		
		<table id="dataTable"class="scrollmenu table table-striped table-hover "style='background:white;border:solid 2px black;margin-left: -100px;'border='2'>
		<thead>
 	
			<tr>
				
				<th>LONG_NAME_ENG</th>
				<th>BRANCH_CODE</th>
				<th>CURRENCY_CODE</th>
				<th>GL_CODE</th>
				<th>	CIF_SUB_NO</th>
				<th>DATE_OPND</th>
				<th>Demande Signée</th>
				<th>2 Photos</th>
				<th>Spécimen de signature</th>
				<th>Existence KYC</th>
				<th>KYC Signée par CCL</th>
				<th>KYC Signée par RA</th>
				<th>Accord de conformité</th>
				<th>Pièce d'Idendité</th>
				<th>Conformité Infos           R.C ET P.I / Syst</th>
				<th>Extrait de RC ou agrement</th>
				<th>NIF</th>
				<th>Statut daté et signé</th>
				<th>PV de l'Asemblée Générale</th>
				<th>PV de conseil d'administration SA</th>
				<th>Pièces Identité des actionnaires</th>
				<th>Risque LAB</th>
				<th>Check liste Existence</th>
				<th>Check liste Remplie</th>
				<th>OFAC</th>
				<th>UK</th>
				<th>UE</th>
				<th>Existance J.Adresse</th>
				<th>Date</th>
				<th>au nom du client</th>
				<th>CNI hebergeur</th>
				<th>CCL</th>
				<th>Client</th>
				<th>Observation</th>
				
			</tr>
			</thead>
	    <tbody>

			<?php
				include('includes/db.php');
				
				if(isset($_GET['ok'])){
					session_start();
				$_SESSION['BRANCH_CODE']=$_GET["BRANCH_CODE"];
				$_SESSION['GL_CODE']=$_GET["GL_CODE"];
				
				}

				if(isset($_SESSION['BRANCH_CODE'])){

				$sql="select*from ouverture_de_compte where BRANCH_CODE='".$_SESSION['BRANCH_CODE']."' order by id desc";
				}elseif(isset($_SESSION['GL_CODE'])){
				
					$sql="select*from ouverture_de_compte  where GL_CODE='".$_SESSION['GL_CODE']."' order by id desc";
					}elseif(isset($_SESSION['BRANCH_CODE']) && isset($_SESSION['GL_CODE'])){
						
						$sql="select*from ouverture_de_compte  where BRANCH_CODE='".$_SESSION['BRANCH_CODE']."' and GL_CODE='".$_SESSION['GL_CODE']."'   order by id desc";
						}
						else{
							
								$sql="select*from ouverture_de_compte order by id desc";
							
				}
				foreach ($db->query($sql) as $row) {
				?>

			 
				
				
				
			
			<tr>
				<?php for($i=0;$i<34;$i++){ ?>
				<td><?php echo $row[$i]; ?></td>
				<?php } ?>
				
			</tr>

			<?php
				} $db=null;
				?>
			
	  </tbody>
		</table>
		

		<br>
		<?php
				include('includes/db.php');
				if(isset($_SESSION['BRANCH_CODE'])){

					$sql="select*from ouverture_de_compte where BRANCH_CODE='".$_SESSION['BRANCH_CODE']."' order by id desc";
					}elseif(isset($_SESSION['GL_CODE'])){
					
						$sql="select*from ouverture_de_compte  where GL_CODE='".$_SESSION['GL_CODE']."' order by id desc";
						}elseif(isset($_SESSION['BRANCH_CODE']) && isset($_SESSION['GL_CODE'])){
							
							$sql="select*from ouverture_de_compte  where BRANCH_CODE='".$_SESSION['BRANCH_CODE']."' and GL_CODE='".$_SESSION['GL_CODE']."'   order by id desc";
							}
							else{
								
									$sql="select*from ouverture_de_compte order by id desc";
								
					}
				foreach ($db->query($sql) as $row) {
				?>

			 
				
				<table class=""style='width:100px;margin-left:-1420px;margin-top:-140px;background:none;'>
				
				<tr >
				<td >
				<div style='height:30px'>
				<a href='edit_client.php?id=<?php echo $row[34]; ?>' class='btn btn-success 'style='font-size: 10px;border:solid 2px white'><i class='fa fa-pen' ></i> Modifier</a>
				
				<?php if (!empty($adminID)) { ?>
				<form method='post'action='admin/adminPP/delete_user.php'style='margin-top: 2px;margin-bottom:-5px'>
				<input name='userID' value='<?php echo $row[34]; ?>' type='hidden'>
				<button name='del_u'class='btn btn-danger 'style='font-size: 8px;border:solid 2px white'><i class='fa fa-trash'></i> Supprimer</button>
				</form>
				<?php } ?>
				<hr>
				</div>
				</td>
				</tr>
				
				</table>

				<?php
				} $db=null;
				?>
		</center>
	
    </div>

		
</body>


 <?php 
include("includes/footer.php");
  ?>

</html>
<?php
    if(isset($_GET['cnx'])){
      $a=$_GET['cnx'];
      if($a==1){ ?>
      <script>swal.fire("Connecté!", "", "success")  </script>
      <?php
      }elseif($a==0){ ?>
      <script>swal.fire("Erreur", "Veuillez réessayer!", "warning")  </script>
      <?php }
    }
    ?>
<style>
/*table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
    width: 90%;
}*/
.container > div {
    float: left;
		
}
body{
	overflow-x: auto;
}
.scrollmenu {
 
  overflow: auto;
	overflow-y: hidden;
	width:1000px;
	height:800px;
  padding-left:200px;

	
}

</style>