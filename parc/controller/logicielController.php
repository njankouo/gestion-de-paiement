<?php

require_once '../model/logicielDB.php';

$logicieldb= new logicielDB();

$action= $_GET['action'];

if($action == 'create') {


	
	$nom= $_POST['nom'];
	
	$type= $_POST['type'];

	$version= $_POST['version'];
	$licence= $_POST['licence'];

	$date= $_POST['date'];
	
	
	$error= $logicieldb->create($nom, $type, $version,$licence, $date);

	if($error != null) {
		header('Location:../logiciel.php?error=1');
	}
	else {
				header('Location:../logiciel.php?error=0');
	}
}

if($action == 'update') {
	$id= $_POST['id'];


	
	$nom= $_POST['nom'];
	$type= $_POST['type'];
	
	$version= $_POST['version'];
	$licence= $_POST['licence'];
	$date_fin_licence= $_POST['date_fin_licence'];
	
	
	
	$error= $logicieldb->update($id, $nom, $type,$version,$licence, $date_fin_licence);

	if($error != null) {
		header('Location:../logiciel_modif.php?error=1');
	}
	else {
			header('Location:../logiciel.php?error=0');
	}
}

if($action == 'read') {
	$id= $_GET['id'];

	$logiciel= $logicieldb->read($id);

	session_start();
	$_SESSION['logiciel']= $logiciel;
	header('Location:../logiciel_modif.php');
}


if($action == 'delete') {
	$id= $_GET['id'];

	$error= $logicieldb->delete($id); 

	if($error != null) {
		header('Location:../logiciel.php?error=1');
	}
	else {
			header('Location:../logiciel_affiche.php?error=0');
	}

}









?>




