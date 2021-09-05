<?php 
/*
if(isset($_POST['submit_file']))
{
    $db=new PDO('sqlite:../db/db.sqlite');

 $file = $_FILES['file']['tmp_name'];
 $file_open = fopen($file,'r');
 while(($csv = fgetcsv($file_open, 1000, ',')) !== false)
 {
  $LONG_NAME_ENG = $csv[1];
  $BRANCH_CODE = $csv[2];
  $CURRENCY_CODE = $csv[3];
  $GL_CODE = $csv[4];
  $CIF_SUB_NO = $csv[5];
  $Demande_Signee = $csv[7];
  $deux_Photos = $csv[8];
  $Specimen_de_signature = $csv[9];
  $Existence_KYC = $csv[10];
  $KYC_Signee_par_CCL = $csv[11];
  $KYC_Signee_par_RA = $csv[12];
  $Accord_de_conformite = $csv[13];
  $Piece_d_Identite = $csv[14];
  $Conformite_Infos_RC_ET_PI_Syst = $csv[15];
  $Extrait_de_RC_ou_agrement = $csv[16];
  $NIF = $csv[17];
  $Statut_date_et_signe = $csv[18];
  $PV_de_l_Assemblee_Generale = $csv[19];
  $PV_de_conseil_d_administration_SA = $csv[20];
  $Pieces_Identite_des_actionnaires = $csv[21];
  $Risque_LAB = $csv[22];
  $Check_liste_Existence = $csv[23];
  $Check_liste_Remplie = $csv[24];
  $OFAC = $csv[25];
  $UK = $csv[26];
  $UE = $csv[27];
  $Existence_J_Adresse = $csv[28];
  $Date = $csv[29];
  $au_nom_du_client = $csv[30];
  $CNI_hebergeur = $csv[31];
  $CCL = $csv[32];
  $Client = $csv[33];
  $Observation = $csv[34];
 

  $r=$db->exec("INSERT INTO ouverture_de_compte ('LONG_NAME_ENG','BRANCH_CODE','CURRENCY_CODE','GL_CODE','CIF_SUB_NO','Demande_Signee','deux_Photos','Specimen_de_signature','Existence_KYC','KYC_Signee_par_CCL','KYC_Signee_par_RA','Accord_de_conformite','Piece_d_Identite','Conformite_Infos_RC_ET_PI_Syst','Extrait_de_RC_ou_agrement','NIF','Statut_date_et_signe','PV_de_l_Assemblee_Generale','PV_de_conseil_d_administration_SA','Pieces_Identite_des_actionnaires','Risque_LAB','Check_liste_Existence','Check_liste_Remplie','OFAC','UK','UE','Existence_J_Adresse','Date','au_nom_du_client','CNI_hebergeur','CCL','Client','Observation') 
    VALUES ('$LONG_NAME_ENG','$BRANCH_CODE','$CURRENCY_CODE','$GL_CODE','$CIF_SUB_NO','$Demande_Signee','$deux_Photos','$Specimen_de_signature','$Existence_KYC','$KYC_Signee_par_CCL','$KYC_Signee_par_RA','$Accord_de_conformite','$Piece_d_Identite','$Conformite_Infos_RC_ET_PI_Syst','$Extrait_de_RC_ou_agrement','$NIF','$Statut_date_et_signe','$PV_de_l_Assemblee_Generale','$PV_de_conseil_d_administration_SA','$Pieces_Identite_des_actionnaires','$Risque_LAB','$Check_liste_Existence','$Check_liste_Remplie','$OFAC','$UK','$UE','$Existence_J_Adresse','$Date','$au_nom_du_client','$CNI_hebergeur','$CCL','$Client','$Observation')");
 }

 if($r){
        header('Location:../../import_clients.php?a=1');
        $db=null;
    }else{
        $db=null;
        header('Location:../../import_clients.php?a=0');
    }
}

*/
?>
<?php 
/*
if(isset($_POST['submit_file']))
{
    $connect = new PDO('sqlite:../db/db.sqlite');


    include('../../util/PHPExcel/IOFactory.php');

    $file = $_FILES['file']['tmp_name'];
    $file_open = fopen($file,'r');

    $objPHPExcel=PHPExcel_IOFactory::load('Ouverture%20de%20compte.xlsx');

foreach($objPHPExcel->getWorksheetIterator() as $worksheet){
    $highestRow=$worksheet->getHighestRow();
    for($row=2;$row<=$highestRow;$row++){

  $LONG_NAME_ENG = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(0,$row)->getValue());
  $BRANCH_CODE = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(1,$row)->getValue());
  $CURRENCY_CODE = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(2,$row)->getValue());
  $GL_CODE = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(3,$row)->getValue());
  $CIF_SUB_NO = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(4,$row)->getValue());
 // $DATE_OPND = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(5,$row)->getValue());
  $Demande_Signee = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(6,$row)->getValue());
  $deux_Photos = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(7,$row)->getValue());
  $Specimen_de_signature = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(8,$row)->getValue());
  $Existence_KYC = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(9,$row)->getValue());
  $KYC_Signee_par_CCL = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(10,$row)->getValue());
  $KYC_Signee_par_RA = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(11,$row)->getValue());
  $Accord_de_conformite = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(12,$row)->getValue());
  $Piece_d_Identite = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(13,$row)->getValue());
  $Conformite_Infos_RC_ET_PI_Syst = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(14,$row)->getValue());
  $Extrait_de_RC_ou_agrement = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(15,$row)->getValue());
  $NIF = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(16,$row)->getValue());
  $Statut_date_et_signe = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(17,$row)->getValue());
  $PV_de_l_Assemblee_Generale = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(18,$row)->getValue());
  $PV_de_conseil_d_administration_SA = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(19,$row)->getValue());
  $Pieces_Identite_des_actionnaires = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(20,$row)->getValue());
  $Risque_LAB = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(21,$row)->getValue());
  $Check_liste_Existence = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(22,$row)->getValue());
  $Check_liste_Remplie = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(23,$row)->getValue());
  $OFAC = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(24,$row)->getValue());
  $UK = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(25,$row)->getValue());
  $UE = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(26,$row)->getValue());
  $Existence_J_Adresse = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(27,$row)->getValue());
  $Date = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(28,$row)->getValue());
  $au_nom_du_client = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(29,$row)->getValue());
  $CNI_hebergeur = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(30,$row)->getValue());
  $CCL = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(31,$row)->getValue());
  $Client = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(32,$row)->getValue());
  $Observation = mysql_real_escape_string($connect,$worksheet->getCellByColumnAndRow(33,$row)->getValue());

    }
}
 
    $sql="INSERT INTO ouverture_de_compte (
    LONG_NAME_ENG,
    BRANCH_CODE,
    CURRENCY_CODE,
    GL_CODE,
    CIF_SUB_NO,
    Demande_Signee,
    deux_Photos,
    Specimen_de_signature,
    Existence_KYC,
    KYC_Signee_par_CCL,
    KYC_Signee_par_RA,
    Accord_de_conformite,
    Piece_d_Identite,
    Conformite_Infos_RC_ET_PI_Syst,
    Extrait_de_RC_ou_agrement,
    NIF,
    Statut_date_et_signe,
    PV_de_l_Assemblee_Generale,
    PV_de_conseil_d_administration_SA,
    Pieces_Identite_des_actionnaires,
    Risque_LAB,
    Check_liste_Existence,
    Check_liste_Remplie,
    OFAC,
    UK,
    UE,
    Existence_J_Adresse,
    'Date',
    au_nom_du_client,
    CNI_hebergeur,
    CCL,
    Client,
    Observation) 
    VALUES ('$LONG_NAME_ENG','$BRANCH_CODE','$CURRENCY_CODE','$GL_CODE','$CIF_SUB_NO','$Demande_Signee','$deux_Photos','$Specimen_de_signature','$Existence_KYC','$KYC_Signee_par_CCL','$KYC_Signee_par_RA','$Accord_de_conformite','$Piece_d_Identite','$Conformite_Infos_RC_ET_PI_Syst','$Extrait_de_RC_ou_agrement','$NIF','$Statut_date_et_signe','$PV_de_l_Assemblee_Generale','$PV_de_conseil_d_administration_SA','$Pieces_Identite_des_actionnaires','$Risque_LAB','$Check_liste_Existence','$Check_liste_Remplie','$OFAC','$UK','$UE','$Existence_J_Adresse','$Date','$au_nom_du_client','$CNI_hebergeur','$CCL','$Client','$Observation')";


  mysqli_query($connect,$sql);
 

 if($r){
        header('Location:../../import_clients.php?a=1');
        $db=null;
    }else{
        $db=null;
        header('Location:../../import_clients.php?a=0');
    }


}

*/
?>
<?php 

/*
if(isset($_POST['submit_file']))
{
    $connect = mysqli_connect('localhost:8889','root','root','bdd');

 $file = $_FILES['file']['tmp_name'];
 $file_open = fopen($file,'r');
 while(($csv = fgetcsv($file_open, 1000, ',')) !== false)
 {
  $LONG_NAME_ENG = $csv[0];
  $BRANCH_CODE = $csv[1];
  $CURRENCY_CODE = $csv[2];
  $GL_CODE = $csv[3];
  $CIF_SUB_NO = $csv[4];
  $DATE_OPND = $csv[5];
  $Demande_Signee = $csv[6];
  $deux_Photos = $csv[7];
  $Specimen_de_signature = $csv[8];
  $Existence_KYC = $csv[9];
  $KYC_Signee_par_CCL = $csv[10];
  $KYC_Signee_par_RA = $csv[11];
  $Accord_de_conformite = $csv[12];
  $Piece_d_Identite = $csv[13];
  $Conformite_Infos_RC_ET_PI_Syst = $csv[14];
  $Extrait_de_RC_ou_agrement = $csv[15];
  $NIF = $csv[16];
  $Statut_date_et_signe = $csv[17];
  $PV_de_l_Assemblee_Generale = $csv[18];
  $PV_de_conseil_d_administration_SA = $csv[19];
  $Pieces_Identite_des_actionnaires = $csv[20];
  $Risque_LAB = $csv[21];
  $Check_liste_Existence = $csv[22];
  $Check_liste_Remplie = $csv[23];
  $OFAC = $csv[24];
  $UK = $csv[25];
  $UE = $csv[26];
  $Existence_J_Adresse = $csv[27];
  $Date = $csv[28];
  $au_nom_du_client = $csv[29];
  $CNI_hebergeur = $csv[30];
  $CCL = $csv[31];
  $Client = $csv[32];
  $Observation = $csv[33];
 

  $r=mysqli_query($connect,"INSERT INTO ouverture_de_compte (
       LONG_NAME_ENG,
    BRANCH_CODE,
    CURRENCY_CODE,
    GL_CODE,
    CIF_SUB_NO,
    DATE_OPND,
    Demande_Signee,
    deux_Photos,
    Specimen_de_signature,
    Existence_KYC,
    KYC_Signee_par_CCL,
    KYC_Signee_par_RA,
    Accord_de_conformite,
    Piece_d_Identite,
    Conformite_Infos_RC_ET_PI_Syst,
    Extrait_de_RC_ou_agrement,
    NIF,
    Statut_date_et_signe,
    PV_de_l_Assemblee_Generale,
    PV_de_conseil_d_administration_SA,
    Pieces_Identite_des_actionnaires,
    Risque_LAB,
    Check_liste_Existence,
    Check_liste_Remplie,
    OFAC,
    UK,
    UE,
    Existence_J_Adresse,
    'Date',
    au_nom_du_client,
    CNI_hebergeur,
    CCL,
    Client,
    Observation
    ) 
    VALUES ('$LONG_NAME_ENG','$BRANCH_CODE','$CURRENCY_CODE','$GL_CODE','$CIF_SUB_NO','$DATE_OPND','$Demande_Signee','$deux_Photos','$Specimen_de_signature','$Existence_KYC','$KYC_Signee_par_CCL','$KYC_Signee_par_RA','$Accord_de_conformite','$Piece_d_Identite','$Conformite_Infos_RC_ET_PI_Syst','$Extrait_de_RC_ou_agrement','$NIF','$Statut_date_et_signe','$PV_de_l_Assemblee_Generale','$PV_de_conseil_d_administration_SA','$Pieces_Identite_des_actionnaires','$Risque_LAB','$Check_liste_Existence','$Check_liste_Remplie','$OFAC','$UK','$UE','$Existence_J_Adresse','$Date','$au_nom_du_client','$CNI_hebergeur','$CCL','$Client','$Observation')");
 }

 if($r){
        header('Location:../../import_clients.php?a=1');
        $db=null;
    }else{
        $db=null;
        header('Location:../../import_clients.php?a=0');
    }
}
*/

?>
<?php 
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "bdd";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['submit_file'])) 
{
 //Import uploaded file to Database

 $handle = fopen($_FILES['filename']['tmp_name'], "r");
 while(($data = fgetcsv($handle)) !== FALSE){

     $user_name=$data[0];
    $first_name=$data[1];
    $last_name=$data[2];
    $date_added=$data[3];

 $sql = "INSERT into testtbl (user_name, first_name, last_name, date_added)
  values('$user_name', '$first_name', '$last_name', '$date_added')";
 
 $r= mysqli_query($conn, $sql) ;


 if($r){
        header('Location:../../import_clients.php?a=1');
        $db=null;
    }else{
        $db=null;
        header('Location:../../import_clients.php?a=0');
    }
}
?>
