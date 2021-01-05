<?php

require_once '../model/materielDB.php';

$materieldb= new materielDB();

$action= $_GET['action'];

if($action == 'create') {


	
	$etat_materiel= $_POST['etat_materiel'];
	
	$type_materiel= $_POST['type_materiel'];

	$fournisseur= $_POST['fournisseur'];
	$marque= $_POST['marque'];

	$numero_serie= $_POST['numero_serie'];
	$date_achat= $_POST['date_achat'];
	$garantie= $_POST['garantie'];
	
	
	$error= $materieldb->create($etat_materiel, $type_materiel, $fournisseur,$marque, $numero_serie, $date_achat, $garantie);

	if($error != null) {
		header('Location:../materiel.php?error=1');
	}
	else {
				header('Location:../materiel.php?error=0');
	}
}

if($action == 'update') {
	$id= $_POST['id'];


	
	$etat_materiel= $_POST['etat_materiel'];
	$type_materiel= $_POST['type_materiel'];
	
	$fournisseur= $_POST['fournisseur'];
	$marque= $_POST['marque'];
	$numero_serie= $_POST['numero_serie'];
	$date_achat= $_POST['date_achat'];
	$garantie= $_POST['garantie'];
	
	
	
	$error= $materieldb->update($id, $etat_materiel, $type_materiel,$fournisseur, $marque, $numero_serie, $date_achat, $garantie);

	if($error != null) {
		header('Location:../modif_materiel.php?error=1');
	}
	else {
			header('Location:../materiel.php?error=0');
	}
}

if($action == 'read') {
	$id= $_GET['id'];

	$materiel= $materieldb->read($id);

	session_start();
	$_SESSION['materiel']= $materiel;
	header('Location:../modif_materiel.php');
}


if($action == 'delete') {
	$id= $_GET['id'];

	$error= $materieldb->delete($id); 

	if($error != null) {
		header('Location:../materiel.php?error=1');
	}
	else {
			header('Location:../mat_affiche.php?error=0');
	}

}









?>




