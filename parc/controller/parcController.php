<?php

require_once '../model/ParcDB.php';

$parcdb= new ParcDB();

$action= $_GET['action'];

if($action == 'create') {
	$nom= $_POST['nom'];
	$prenom= $_POST['prenom'];
	$type= $_POST['type'];
	$service= $_POST['service'];
	$bureau= $_POST['bureau'];
	$contact= $_POST['contact'];



	$error= $parcdb->create($nom, $prenom, $type, $service, $bureau, $contact);

	if($error != null) {
		header('Location:../acceuil.php?error=1');
	}
	else {
				header('Location:../acceuil.php?error=0');
	}
}

if($action == 'update') {
	$id= $_POST['id'];
	$nom= $_POST['nom'];
	$prenom= $_POST['prenom'];
	$type= $_POST['type'];
	$service= $_POST['service'];
	$bureau= $_POST['bureau'];
	$contact= $_POST['contact'];



	$error= $parcdb->update($id, $nom, $prenom, $type, $service, $bureau, $contact);

	if($error != null) {
		header('Location:../modif_parc.php?error=1');
	}
	else {
			header('Location:../parc.php?error=0');
	}
}

if($action == 'read') {
	$id= $_GET['id'];

	$parc= $parcdb->read($id);

	session_start();
	$_SESSION['parca']= $parc;
	header('Location:../modif_parc.php');
}


if($action == 'delete') {
	$id= $_GET['id'];

	$error= $parcdb->delete($id); 

	if($error != null) {
		header('Location:../parc.php?error=1');
	}
	else {
			header('Location:../parc.php?error=0');
	}

}









?>




