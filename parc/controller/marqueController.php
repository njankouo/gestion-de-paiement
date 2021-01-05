<?php

require_once '../model/marqueDB.php';

$marquedb= new marqueDB();

$action= $_GET['action'];

if($action == 'create') {
	$nom= $_POST['nom'];
	$durabilite= $_POST['durabilite'];
	$constructeur= $_POST['constructeur'];
	

	$error= $marquedb->create($nom, $durabilite, $constructeur);

	if($error != null) {
		header('Location:../marque.php?error=1');
	}
	else {
				header('Location:../marque.php?error=0');
	}
}

if($action == 'update') {
	$id= $_POST['id'];
		$nom= $_POST['nom'];
	$durabilite= $_POST['durabilite'];
	$constructeur= $_POST['constructeur'];
	


	$error= $marquedb->update($id, $nom, $durabilite, $constructeur);

	if($error != null) {
		header('Location:../modif_marque.php?error=1');
	}
	else {
			header('Location:../marque.php?error=0');
	}
}

if($action == 'read') {
	$id= $_GET['id'];

	$marque= $marquedb->read($id);

	session_start();
	$_SESSION['marque']= $marque;
	header('Location:../marque_modif.php');
}


if($action == 'delete') {
	$id= $_GET['id'];

	$error= $marquedb->delete($id); 

	if($error != null) {
		header('Location:../marque.php?error=1');
	}
	else {
			header('Location:../marque_affiche.php?error=0');
	}

}









?>




