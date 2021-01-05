<?php

require_once '../model/interventionDB.php';

$interventiondb= new interventionDB();

$action= $_GET['action'];

if($action == 'create') {


	
	$date= $_POST['date'];
	
	$accomplie= $_POST['accomplie'];

	$observation= $_POST['observation'];
	$description_panne= $_POST['description_panne'];


	
	
	$error= $interventiondb->create($date, $accomplie, $observation,$description_panne);

	if($error != null) {
		header('Location:../intervention.php?error=1');
	}
	else {
				header('Location:../intervention.php?error=0');
	}
}

if($action == 'update') {
	$id= $_POST['id'];


	
		$date= $_POST['date'];
	$accomplie= $_POST['accomplie'];
	
	$observation= $_POST['observation'];
	$description_panne= $_POST['description_panne'];
	
	
	
	
	$error= $interventiondb->update($id,$date,$accomplie,$observation,$description_panne);

	if($error != null) {
		header('Location:../intervention_modif.php?error=1');
	}
	else {
			header('Location:../intervention.php?error=0');
	}
}

if($action == 'read') {
	$id= $_GET['id'];

	$intervention= $interventiondb->read($id);

	session_start();
	$_SESSION['intervention']= $intervention;
	header('Location:../intervention_modif.php');
}


if($action == 'delete') {
	$id= $_GET['id'];

	$error= $interventiondb->delete($id); 

	if($error != null) {
		header('Location:../intervention.php?error=1');
	}
	else {
			header('Location:../intervention_affiche.php?error=0');
	}

}









?>




