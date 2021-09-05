<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><b> </b></a>&nbsp&nbsp&nbsp
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"style='border:solid 1px white; padding:9px 14px 9px 14px'onclick='openMenu()'>
      <span class="fas fa-bars" id='menuButton'  ></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if(!empty($userID) or !empty($adminID)){ ?>
        <li class="nav-item">
          <a class="btn btn-primary" aria-current="page" href="index.php"><i class='fa fa-home'></i> Acceuil</a>
        </li>&nbsp&nbsp&nbsp
        <li class="nav-item">
          <a class="btn btn-primary" aria-current="page" href="user_cat_choice.php"><i class='fa fa-list'></i> Sélectionner une catégorie</a>
        </li>&nbsp&nbsp&nbsp
        <?php } ?>
		<!--
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catégories
          </a>
		  
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <?php 
$db=new PDO('sqlite:admin/db/db.sqlite');
$sql='select distinct category from ad order by id desc';
foreach($db->query($sql) as $cat){ 
?>
            <li><a class="dropdown-item" href="index.php?cat=<?php echo $cat[0]; ?>"><?php echo $cat[0]; ?></a></li>
<?php } $db=null; ?>

            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php">Tous</a></li>
          </ul>

        </li>-->
        <?php if(!empty($userID) or !empty($adminID)){ ?>
        <li class="nav-item">
          <button  class="dataExport btn btn-success" data-type="excel" href="#" tabindex="3" aria-disabled="true"><i class='fa fa-download'></i> Exporter sur excel</a>
        </li>&nbsp&nbsp&nbsp
        <?php } ?>
		<?php if(!empty($adminID)){ ?>
        <li class="nav-item">
          <a class="btn btn-success" href="import_clients.php" tabindex="3" aria-disabled="true"><i class='fa fa-upload'></i> Importer un fichier excel</a>
        </li>&nbsp&nbsp&nbsp
        <li class="nav-item">
          <a class="btn btn-success" href="add_user.php" tabindex="3" aria-disabled="true"><i class='fa fa-user-plus'></i> Ajouter un utilisateur</a>
        </li>&nbsp&nbsp&nbsp
		<?php } ?>
    <?php if(!empty($userID) or !empty($adminID)){ ?>
        <li class="nav-item">
          <a class="btn btn-success" href="edit_account.php" tabindex="3" aria-disabled="true"><i class='fa fa-user-edit'></i> Modifier mon compte</a>
        </li>&nbsp&nbsp&nbsp
<?php } ?>
		<?php if(!empty($userID) or !empty($adminID)){ ?>
			<li class="nav-item" >
			<a class="btn btn-danger" href="admin/logout.php" style='font-weight:bold;float:right;'><i class='fas fa-sign-out-alt'></i> déconnexion</a>
			</li>
		<?php } ?>

      </ul>
    </div>
  </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="util/js/export_to_excel/tableExport/tableExport.js"></script>
<script type="text/javascript" src="util/js/export_to_excel/tableExport/jquery.base64.js"></script>
<script src="util/js/export_to_excel/export.js"></script>


<script>
function openMenu(){
 var x=document.getElementById("navbarSupportedContent");
 var b =document.getElementById('menuButton');
 
 if(x.offsetHeight == 0){
 b.className = "fas fa-times";
 }
 else{
 	b.className = "fas fa-bars";
 }
 b.addEventListener("click", false);

}
</script>