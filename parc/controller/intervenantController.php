<?php

require_once '../model/intervenantDB.php';

$intervenantdb= new intervenantDB();

$action= $_GET['action'];

if($action == 'create') {


	
	$nom= $_POST['nom'];
	
	$prenom= $_POST['prenom'];

	$telephone= $_POST['telephone'];
	$type_intervention= $_POST['type_intervention'];


	
	
	$error= $intervenantdb->create($nom, $prenom, $telephone,$type_intervention);

	if($error != null) {
		header('Location:../intervenant.php?error=1');
	}
	else {
				header('Location:../intervenant.php?error=0');
	}
}

if($action == 'update') {
	$id= $_POST['id'];


	
		$nom= $_POST['nom'];
	$prenom= $_POST['prenom'];
	
	$telephone= $_POST['telephone'];
	$type_intervention= $_POST['type_intervention'];
	
	
	
	
	$error= $intervenantdb->update($id,$nom,$prenom,$telephone,$type_intervention);

	if($error != null) {
		header('Location:../intervenant_modif.php?error=1');
	}
	else {
			header('Location:../intervenant.php?error=0');
	}
}

if($action == 'read') {
	$id= $_GET['id'];

	$intervenant= $intervenantdb->read($id);

	session_start();
	$_SESSION['intervenant']= $intervenant;
	header('Location:../intervenant_modif.php');
}


if($action == 'delete') {
	$id= $_GET['id'];

	$error= $intervenantdb->delete($id); 

	if($error != null) {
		header('Location:../intervenant.php?error=1');
	}
	else {
			header('Location:../intervenant_affiche.php?error=0');
	}

}









?>




