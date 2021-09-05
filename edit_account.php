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
<body style='background:rgba(13,169,109,255)'>
    <div class=" animate__animated animate__fadeIn">
    	
		<div class="container-fluid">
  <div class="row d-flex justify-content-center align-items-center m-0" style="height: 60vh;">
    <div class="login_oueter" >
      <form action="admin/<?php if(!empty($adminID)) echo 'adminPP'; else echo 'userPP'; ?>/edit_account.php" method="post" id="login" autocomplete="off" class="bg-light border p-3"style='margin: auto;border-radius:12px' >
        <div class="form-row">
         <h4 class="title my-3 text-center"style='margin:auto;'>Modifier mon compte</h4>
		  <hr>
          <div class="col-12" style='margin-top:20px'>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input name="username" type="text" value="<?php if(!empty($adminID)) echo $adminUsername; else echo $userUsername; ?>" class="input form-control" id="username" placeholder="Identifiant" aria-label="Username" aria-describedby="basic-addon1" />
            </div>
          </div>
          <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="password" type="password" value="" class="input form-control" id="password" placeholder="Mot de passe" required="true" aria-label="password" aria-describedby="basic-addon1" />
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
            <button name='ok'class="btn btn-success" type="submit" ><i class='fa fa-user-edit'></i> Modifier</button>
          </div><br>
          
        </div>
              <input name="ID" type="hidden" value="<?php echo $UID; ?>" class="input form-control" id="username" placeholder="Identifiant" aria-label="Username" aria-describedby="basic-addon1" />
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