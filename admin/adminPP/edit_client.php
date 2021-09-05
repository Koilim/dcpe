<?php 

if(isset($_POST['ok'])){
    include('../../includes/db.php');
    
    $ID=$_POST['ID'];
	$LONG_NAME_ENG=$_POST['LONG_NAME_ENG'];
    $BRANCH_CODE=$_POST['BRANCH_CODE'];
    $CURRENCY_CODE=$_POST['CURRENCY_CODE'];
    $GL_CODE=$_POST['GL_CODE'];
    $CIF_SUB_NO=$_POST['CIF_SUB_NO'];
    $Demande_Signee=$_POST['Demande_Signee'];
    $deux_Photos=$_POST['deux_Photos'];
    $Specimen_de_signature=$_POST['Specimen_de_signature'];
    $Existence_KYC=$_POST['Existence_KYC'];
    $KYC_Signee_par_CCL=$_POST['KYC_Signee_par_CCL'];
    $KYC_Signee_par_RA=$_POST['KYC_Signee_par_RA'];
    $Accord_de_conformite=$_POST['Accord_de_conformite'];
    $Piece_d_Identite=$_POST['Piece_d_Identite'];
    $Conformite_Infos_RC_ET_PI_Syst=$_POST['Conformite_Infos_RC_ET_PI_Syst'];
    $Extrait_de_RC_ou_agrement=$_POST['Extrait_de_RC_ou_agrement'];
    $Statut_date_et_signe=$_POST['Statut_date_et_signe'];
    $PV_de_l_Assemblee_Generale=$_POST['PV_de_l_Assemblee_Generale'];
    $PV_de_conseil_d_administration_SA=$_POST['PV_de_conseil_d_administration_SA'];
    $Pieces_Identite_des_actionnaires=$_POST['Pieces_Identite_des_actionnaires'];
    $Risque_LAB=$_POST['Risque_LAB'];
    $Check_liste_Existence=$_POST['Check_liste_Existence'];
    $Check_liste_Remplie=$_POST['Check_liste_Remplie'];
    $OFAC=$_POST['OFAC'];
    $UK=$_POST['UK'];
    $UE=$_POST['UE'];
    $Existence_J_Adresse=$_POST['Existence_J_Adresse'];
    $Date=$_POST['Date'];
    $au_nom_du_client=$_POST['au_nom_du_client'];
    $CNI_hebergeur=$_POST['CNI_hebergeur'];
    $CCL=$_POST['CCL'];
    $Client=$_POST['Client'];
    $Observation=$_POST['Observation'];   

	$DATE_OPND=date('d-m-Y');

	
    $r=$db->exec("update ouverture_de_compte set 
    LONG_NAME_ENG='$LONG_NAME_ENG',
    BRANCH_CODE='$BRANCH_CODE',
    CURRENCY_CODE='$CURRENCY_CODE',
    GL_CODE='$GL_CODE',
    CIF_SUB_NO='$CIF_SUB_NO',
    DATE_OPND='$DATE_OPND',
    Demande_Signee='$Demande_Signee',
    2_Photos='$deux_Photos',
    Specimen_de_signature='$Specimen_de_signature',
    Existence_KYC='$Existence_KYC',
    KYC_Signee_par_CCL='$KYC_Signee_par_CCL',
    KYC_Signee_par_RA='$KYC_Signee_par_RA',
    Accord_de_conformite='$Accord_de_conformite',
    Piece_d_Identite='$Piece_d_Identite',
    Conformite_Infos_RC_ET_PI_Syst='$Conformite_Infos_RC_ET_PI_Syst',
    Extrait_de_RC_ou_agrement='$Extrait_de_RC_ou_agrement',
    Statut_date_et_signe='$Statut_date_et_signe',
    PV_de_l_Assemblee_Generale='$PV_de_l_Assemblee_Generale',
    PV_de_conseil_d_administration_SA='$PV_de_conseil_d_administration_SA',
    Pieces_Identite_des_actionnaires='$Pieces_Identite_des_actionnaires',
    Risque_LAB='$Risque_LAB',
    Check_liste_Existence='$Check_liste_Existence',
    Check_liste_Remplie='$Check_liste_Remplie',
    OFAC='$OFAC',
    UK='$UK',
    UE='$UE',
    Existence_J_Adresse='$Existence_J_Adresse',
    Date='$Date',
    au_nom_du_client='$au_nom_du_client',
    CNI_hebergeur='$CNI_hebergeur',
    CCL='$CCL',
    Client='$Client',
    Observation='$Observation'
    where id='$ID';
     ");
	
	if($r){
		header("Location:../../edit_client.php?a=1&id=$ID");
		$db=null;
	}else{
		$db=null;
		header("Location:../../edit_client.php?a=0&id=$ID");
	}
	
}

 ?>