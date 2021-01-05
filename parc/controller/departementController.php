<?php

require_once '../model/departementDB.php';

$departementdb= new departementDB();

$action= $_GET['action'];

if($action == 'create') {


	
	$nom= $_POST['nom'];
	
	$responsable= $_POST['responsable'];

	
	
	$error= $departementdb->create($nom, $responsable);

	if($error != null) {
		header('Location:../departement.php?error=1');
	}
	else {
				header('Location:../departement.php?error=0');
	}
}

if($action == 'update') {
	$id= $_POST['id'];


	
	$nom= $_POST['nom'];
	$responsable= $_POST['responsable'];
	
	$error= $departementdb->update($id, $nom,$responsable);

	if($error != null) {
		header('Location:../departement_modif.php?error=1');
	}
	else {
			header('Location:../departement.php?error=0');
	}
}

if($action == 'read') {
	$id= $_GET['id'];

	$departement= $departementdb->read($id);

	session_start();
	$_SESSION['departement']= $departement;
	header('Location:../departement_modif.php');
}


if($action == 'delete') {
	$id= $_GET['id'];

	$error= $departementdb->delete($id); 

	if($error != null) {
		header('Location:../departement.php?error=1');
	}
	else {
			header('Location:../departement_affiche.php?error=0');
	}

}









?>




