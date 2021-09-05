<!doctype html>
<html lang="fr">
  
  <?php 
include("includes/header.php");
include("includes/navbar.php");
  ?>
<body style='background:rgba(13,169,109,255)'>
    <div class=" animate__animated animate__fadeIn">
    	
		<div class="container-fluid">
  <div class="row d-flex justify-content-center align-items-center m-0" style="height: 60vh;">
    <div class="login_oueter" >
      <form action="admin/login_portal.php" method="post" id="login" autocomplete="off" class="bg-light border p-3"style='margin: auto;border-radius:12px' >
        <div class="form-row">
         <h4 class="title my-3 text-center"style='margin:auto;'>Authentification</h4>
		  <hr>
          <div class="col-12" style='margin-top:20px'>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input name="username" type="text" value="" class="input form-control" id="username" placeholder="Identifiant" aria-label="Username" aria-describedby="basic-addon1" required />
            </div>
          </div>
          <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="password" type="password" value="" class="input form-control" id="password" placeholder="Mot de passe" required="true" aria-label="password" aria-describedby="basic-addon1" required />
              <div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide();">
                  <i class="fas fa-eye" id="show_eye"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-6">
          <!--  <div class="form-group form-check text-left">
              <input type="checkbox" name="remember" class="form-check-input" id="remember_me" />
              <label class="form-check-label" for="remember_me">se rappeller de moi</label>
            </div>-->
          </div><br>
          <div class="col-12 text-right">
            <button name='ok'class="btn btn-success" type="submit" name="signin">se connecter</button>
          </div><br>
          
        </div>
      </form>
    </div>
  </div>
</div>
		
    </div>
</body>


 <?php 
include("includes/footer.php");
  ?>

</html>
<?php
    if(isset($_GET['a'])){
      $a=$_GET['a'];
      if($a==0){ ?>
      <script>swal.fire("Erreur", "Identifiant ou mot de passe incorrects, veuillez réessayer!", "warning")  </script>
      <?php }elseif($a==2){ ?>
      <script>swal.fire("Déconnecté(e)", "", "success")  </script>
      <?php }
    }
    ?>

<style>
.login_oueter {
    width: 360px;
    max-width: 100%;
}

</style>

<script>
function password_show_hide() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
</script>