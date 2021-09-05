
<!doctype html>
<html lang="fr">
  
  <?php 
include("includes/header.php");
include("includes/navbar.php");
if(empty($adminID)){
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
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<button onclick='window.history.back()' class="float-right btn btn-success mt-1"><i class='fa fa-arrow-left'></i></button>
	<h4 class="card-title mt-2">Importer des clients</h4>
</header>

<form method='post' action='admin/adminPP/import_clients_xls/index.php'enctype="multipart/form-data">
<article class="card-body">
	<div class="form-row">
		<div class="col form-group">
			<label>Importez un fichier Excel (.xls/.xlsx/.csv) </label>   
		  	<input name='excel'type="file" class="form-control" placeholder="" required="true">
		</div> 
		<br>
</article> 
		<hr>
    <div class="form-group">
        <center><button name="submit_file"type="submit" class="btn btn-primary btn-block"style='width:50%'><b> <i class='fa fa-plus'></i> clickez ici pour importer </b> </button></center>
    </div> <!-- form-group// -->      
</form>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->
</body>
</html>
<?php
    if(isset($_GET['a'])){
      $a=$_GET['a'];
      if($a==1){ ?>
      <script>swal.fire("Importé avec succès!", "", "success")  </script>
      <?php
      }elseif($a==0){ ?>
      <script>swal.fire("Erreur", "Veuillez réessayer!", "warning")  </script>
      <?php }
    }
    ?>