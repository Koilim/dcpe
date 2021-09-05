<!doctype html>
<html lang="fr">
  
  <?php 
include("includes/header.php");
include("includes/navbar.php");
  ?>
  <br><br>
  <center><h3 style="color:white;font-size:bold">Sélection</h3></center><hr>
  <br>
<body style='background:rgba(13,169,109,255)'>
    <div class=" animate__animated animate__fadeIn">
    
    <center>
    <form method="GET" action="index.php">
    <div class="form-group  col-md-4">
		  <label style="color:white;font-size:bold">BRANCH_CODE</label>
		  <select name="BRANCH_CODE" class="form-control">
          <option selected=""disabled="true">Choisir...</option>
               <?php
				 include('includes/db.php');
				foreach ($db->query("select distinct BRANCH_CODE from ouverture_de_compte") as $rowbc) {
				?>
		      <option><?php echo $rowbc[0]; ?></option>
              <?php
                }  
				?>
		  </select>
		</div>
        <div class="form-group  col-md-4">
		  <label style="color:white;font-size:bold">GL_CODE</label>
		  <select name="GL_CODE" class="form-control">
      <option selected=""disabled="true">Choisir...</option>
          <?php
				
				foreach ($db->query("select distinct GL_CODE from ouverture_de_compte") as $rowglc) {
				?>
		      <option><?php echo $rowglc[0]; ?></option>
              <?php
                } $db=null;
				?>
		</div>
   
    <div class="form-group  col-md-4">
    <input type="submit"name="ok" class="btn btn-primary" value="OK" style="width:100px;float:right;margin-top:70px;border:solid 2px white;font-size:bold">
    </div>
    </form>
        </center>
		
    </div>
     <br><hr>
</body>


 <?php 
include("includes/footer.php");
  ?>

</html>
