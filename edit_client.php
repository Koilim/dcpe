
<!doctype html>
<html lang="fr">
  
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

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<br>
<body style='background:rgba(13,169,109,255)'>
<div class="container">


<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<header class="card-header">
	<button onclick='window.history.back()' class="float-right btn btn-success mt-1"><i class='fa fa-arrow-left'></i></button>
	<h4 class="card-title mt-2">Modifier un compte client</h4>
</header>
<?php
if(isset($_GET['id'])){
	$client_id=$_GET['id'];
}
include('includes/db.php');
foreach ($db->query("select*from ouverture_de_compte where id='$client_id'") as $row) {
?>
<article class="card-body">
<form method='post' action='admin/adminPP/edit_client.php'>
<input name="ID" type="hidden" value="<?php echo $client_id; ?>"
	<div class="form-row">
		<div class="col form-group">
			<label>LONG_NAME_ENG </label>   
		  	<input name='LONG_NAME_ENG' value='<?php echo $row[0]; ?>'type="text" class="form-control" placeholder="" <?php if(!empty($userID)){ ?> readonly <?php } ?>>
		</div> 
		<div class="col form-group">
			<label>	BRANCH_CODE	</label>
		  	<input name='BRANCH_CODE'value='<?php echo $row[1]; ?>'type="text" class="form-control" placeholder=" " <?php if(!empty($userID)){ ?> readonly <?php } ?>>
		</div>
		<div class="col form-group">
			<label>	CURRENCY_CODE	</label>
		  	<input name='CURRENCY_CODE'value='<?php echo $row[2]; ?>'type="text" class="form-control" placeholder=" " <?php if(!empty($userID)){ ?> readonly <?php } ?>>
		</div>
		<div class="col form-group">
			<label>GL_CODE </label>   
		  	<input name='GL_CODE'value='<?php echo $row[3]; ?>'type="text" class="form-control" placeholder="" <?php if(!empty($userID)){ ?> readonly <?php } ?>>
		</div> 
		<div class="col form-group">
			<label>	CIF_SUB_NO	</label>
		  	<input name='CIF_SUB_NO'value='<?php echo $row[4]; ?>'type="text" class="form-control" placeholder=" " <?php if(!empty($userID)){ ?> readonly <?php } ?>>
		</div>
		
		<div class="form-group col-md-6">
		  <label>Demande Signée</label>
		  <select name="Demande_Signee" id="inputState" class="form-control">
		      <?php if(!empty($row[6])){ ?><option selected=""><?php echo $row[6]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[6]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[6]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[6]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>  
		<div class="form-group col-md-6">
		  <label>2 Photos</label>
		  <select name="deux_Photos"id="inputState" class="form-control">
		      <?php if(!empty($row[7])){ ?><option selected=""><?php echo $row[7]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[7]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[7]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[7]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>  
		<div class="form-group col-md-6">
		  <label>Spécimen de Signature</label>
		  <select name="Specimen_de_signature"id="inputState" class="form-control">
		      <?php if(!empty($row[8])){ ?><option selected=""><?php echo $row[8]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[8]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[8]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[8]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>  
		<div class="form-group col-md-6">
		  <label>Existence KYC</label>
		  <select name="Existence_KYC"id="inputState" class="form-control">
		      <?php if(!empty($row[9])){ ?><option selected=""><?php echo $row[9]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[9]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[9]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[9]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div> 
		<div class="form-group col-md-6">
		  <label>	KYC Signée par CCL</label>
		  <select name="KYC_Signee_par_CCL"id="inputState" class="form-control">
		      <?php if(!empty($row[10])){ ?><option selected=""><?php echo $row[10]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[10]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[10]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[10]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>  
		<div class="form-group col-md-6">
		  <label>	KYC Signée par RA</label>
		  <select name="KYC_Signee_par_RA"id="inputState" class="form-control">
		      <?php if(!empty($row[11])){ ?><option selected=""><?php echo $row[11]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[11]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[11]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[11]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>  
		<div class="form-group col-md-6">
		  <label>	Accord de conformité</label>
		  <select name="Accord_de_conformite"id="inputState" class="form-control">
		      <?php if(!empty($row[12])){ ?><option selected=""><?php echo $row[12]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[12]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[12]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[12]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>  
		<div class="form-group col-md-6">
		  <label>	Piece d'Identité</label>
		  <select name="Piece_d_Identite"id="inputState" class="form-control">
		      <?php if(!empty($row[13])){ ?><option selected=""><?php echo $row[13]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[13]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[13]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[13]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="form-group col-md-6">
		  <label>	Conformité Infos RC ET PI Syst</label>
		  <select name="Conformite_Infos_RC_ET_PI_Syst"id="inputState" class="form-control">
		      <?php if(!empty($row[14])){ ?><option selected=""><?php echo $row[14]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[14]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[14]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[14]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="form-group col-md-6">
		  <label>	Extrait de RC ou agrément</label>
		  <select name="Extrait_de_RC_ou_agrement"id="inputState" class="form-control">
		      <?php if(!empty($row[15])){ ?><option selected=""><?php echo $row[15]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[15]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[15]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[15]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="col form-group">
			<label>	NIF	</label>
		  	<input name='NIF'value='<?php echo $row[16]; ?>'type="text" class="form-control" placeholder=" ">
		</div>
		<div class="form-group col-md-6">
		  <label>	Statut date et signé</label>
		  <select name="Statut_date_et_signe"id="inputState" class="form-control">
		      <?php if(!empty($row[17])){ ?><option selected=""><?php echo $row[17]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[17]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[17]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[17]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="form-group col-md-6">
		  <label>	PV de l'Assemblée Générale</label>
		  <select name="PV_de_l_Assemblee_Generale"id="inputState" class="form-control">
		      <?php if(!empty($row[18])){ ?><option selected=""><?php echo $row[18]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[18]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[18]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[18]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="form-group col-md-6">
		  <label>	PV de conseil d'administration SA</label>
		  <select name="PV_de_conseil_d_administration_SA"id="inputState" class="form-control">
		      <?php if(!empty($row[19])){ ?><option selected=""><?php echo $row[19]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[19]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[19]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[19]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="form-group col-md-6">
		  <label>	Pieces Identité des actionnaires</label>
		  <select name="Pieces_Identite_des_actionnaires"id="inputState" class="form-control">
		      <?php if(!empty($row[20])){ ?><option selected=""><?php echo $row[20]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[20]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[20]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[20]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="form-group col-md-6">
		  <label>	Risque LAB</label>
		  <select name="Risque_LAB"id="inputState" class="form-control">
		      <?php if(!empty($row[21])){ ?><option selected=""><?php echo $row[21]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[21]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[21]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[21]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="form-group col-md-6">
		  <label>	Check liste Existence</label>
		  <select name="Check_liste_Existence"id="inputState" class="form-control">
		      <?php if(!empty($row[22])){ ?><option selected=""><?php echo $row[22]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[22]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[22]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[22]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="form-group col-md-6">
		  <label>	Check liste Remplie</label>
		  <select name="Check_liste_Remplie"id="inputState" class="form-control">
		      <?php if(!empty($row[23])){ ?><option selected=""><?php echo $row[23]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[23]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[23]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[23]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="form-group col-md-6">
		  <label>	OFAC</label>
		  <select name="OFAC"id="inputState" class="form-control">
		      <?php if(!empty($row[24])){ ?><option selected=""><?php echo $row[24]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[24]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[24]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[24]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="form-group col-md-6">
		  <label>	UK</label>
		  <select name="UK"id="inputState" class="form-control">
		      <?php if(!empty($row[25])){ ?><option selected=""><?php echo $row[25]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[25]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[25]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[25]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="form-group col-md-6">
		  <label>	UE</label>
		  <select name="UE"id="inputState" class="form-control">
		      <?php if(!empty($row[26])){ ?><option selected=""><?php echo $row[26]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[26]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[26]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[26]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="form-group col-md-6">
		  <label>	Existence J Adresse</label>
		  <select name="Existence_J_Adresse"id="inputState" class="form-control">
		      <?php if(!empty($row[27])){ ?><option selected=""><?php echo $row[27]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[27]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[27]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[27]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="col form-group">
			<label>	Date	</label>
		  	<input name='Date'value='<?php echo $row[28]; ?>'type="date" class="form-control" placeholder=" ">
		</div>
		<div class="form-group col-md-6">
		  <label>	au nom du client</label>
		  <select name="au_nom_du_client"id="inputState" class="form-control">
		      <?php if(!empty($row[29])){ ?><option selected=""><?php echo $row[29]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[29]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[29]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[29]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="form-group col-md-6">
		  <label>	CNI hébergeur</label>
		  <select name="CNI_hebergeur"id="inputState" class="form-control">
		      <?php if(!empty($row[30])){ ?><option selected=""><?php echo $row[30]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[30]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[30]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[30]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		
		<div class="col form-group">
			<label>	CCL	</label>
		  	<input name='CCL'value='<?php echo $row[31]; ?>'type="text" class="form-control" placeholder=" ">
		</div>
		<div class="form-group col-md-6">
		  <label>	Client</label>
		  <select name="Client"id="inputState" class="form-control">
		      <?php if(!empty($row[32])){ ?><option selected=""><?php echo $row[32]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[32]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[32]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[32]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
		<div class="form-group col-md-6">
		  <label>	Observation</label>
		  <select name="Observation"id="inputState" class="form-control">
		      <?php if(!empty($row[33])){ ?><option selected=""><?php echo $row[33]; ?></option><?php }else{ ?> <option selected=""disabled="true">Choisir...</option><?php } ?>
		      <?php if($row[33]!="OK"){ ?><option>OK</option><?php } ?>
		      <?php if($row[33]!="KO"){ ?><option>KO</option><?php } ?>
		      <?php if($row[33]!="NÉANT"){ ?><option>NÉANT</option><?php } ?>
		  </select>
		</div>
	</div> 
	
		<hr>
    <div class="form-group">
        <button name='ok' type="submit" class="btn btn-primary btn-block" style='border:solid 2px white'><b> <i class='fa fa-edit'></i> clickez ici pour modifier</b> </button>
    </div> <!-- form-group// -->      
</form>
</article> <!-- card-body end .// -->
			<?php
				} $db=null;
				?>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->
</body>
<?php include('includes/footer.php'); ?>
</html>
<?php
    if(isset($_GET['a'])){
      $a=$_GET['a'];
      if($a==1){ ?>
      <script>swal.fire("Modifié!", "", "success")  </script>
      <?php
      }elseif($a==0){ ?>
      <script>swal.fire("Erreur", "Veuillez réessayer!", "warning")  </script>
      <?php }
    }
    ?>