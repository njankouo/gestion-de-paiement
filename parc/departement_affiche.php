<?php 

/********************** Gestion des erreurs *************/

if(isset($_GET['error']) == true) {
	$error= $_GET['error'];

	if($error == 0) {
		echo '<script type="text/javascript">';
		echo 'alert("Action réalisée avec succés")';
		echo '</script>';
	}
	else {
		echo '<script type="text/javascript">';
		echo 'alert("Echec de l\'action")';
		echo '</script>';
	}
}

/********************** Fin Gestion des erreurs *************/
require_once'model/departementDB.php';
$departementdb = new departementDB();
$departements = $departementdb->readAll();



?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Liste des departementts</title>

		<link rel="stylesheet" type="text/css" href="cascade/cascade.css" />
		 <link rel="stylesheet" href="datatables.min.css">
		 <link rel="stylesheet" href="bootstrap4-glyphicons-master\bootstrap4-glyphicons\css\bootstrap-glyphicons.css">
		 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
          <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
          <script type="text/javascript" src="jqueryui/jquery-ui.min.js"></script>
          <script type="text/javascript" src="datatables.min.js"></script>

  <script>
      $(document).ready(function(){
        $('#tab').DataTable();

      } );
    </script>


		




	</head>
	<style type="text/css">
		.color{
    background-color: rgb(0,28,55);
  }

.dropbtn {
    background-color: rgb(35,71,71);
    color: white;
    padding: 15px;
    font-size: 15px;
    border: none;
    border-radius: 12px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: rgb(36,72,72);}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color:  rgb(36,72,72);
}
 


 
	</style>
	<body>

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12"><br>
		 <nav class="navbar navbar-expand-lg navbar-light col-md-12 color">
         
                <div class="col-md-12 form-inline">
             <p class="text-light">liste des fournisseurs</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
               
 <div class="dropdown">
  <button class="dropbtn">gestion intervenants</button>
  <div class="dropdown-content">
    <a href="intervenant.php">nouveau</a>
    <a href="intervenant_affiche.php">liste des intervenants</a>
    
  </div>
</div> &nbsp;


<div class="dropdown">
  <button class="dropbtn">gestion intervention</button>
  <div class="dropdown-content">
    <a href="intervention.php">nouveau</a>
    <a href="intervention_affiche.php">liste des interventions</a>
    
  </div>
</div> &nbsp;


<div class="dropdown">
  <button class="dropbtn">gestion departement</button>
  <div class="dropdown-content">
    <a href="departement.php">nouveau</a>
    
  </div>
</div> &nbsp;


<div class="dropdown">
  <button class="dropbtn">gestion materiels</button>
  <div class="dropdown-content">
    <a href="materiel.php">nouveau</a>
    <a href="mat_affiche.php">liste des materiaux</a>
    
  </div>
</div> &nbsp;


<div class="dropdown">
  <button class="dropbtn">gestion fournisseurs</button>
  <div class="dropdown-content">
    <a href="acceuil.php">nouveau</a>
    <a href="parc.php">liste des fournisseurs</a>
      </div>
  </div>
</div> &nbsp;
      

                 
               


            
            </nav> <br><br><br>

		
	   <table id="tab" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                    <th class="th-sm">#<span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
                     </th>
                    
                      <th class="th-sm">nom de la departement&nbsp;<span class="glyphicon glyphicon-sort"></span>
                       </th>
                        <th class="th-sm">responsable&nbsp;<span class="glyphicon glyphicon-sort"></span>
                         </th>
                               <th class="th-sm">fonction a executer<span class="glyphicon glyphicon-sort"></span>
                              
                                </th>
                                 </tr>
                      </thead>

	



		<?php
				if($departements != null) {
					foreach ($departements as $departement) {
			?>
			<tr class="element">
				<td class="data"><?php echo $departement->id ?></td>
				<td class="data"><?php echo $departement->nom?></td>
				<td class="data"><?php echo $departement->responsable ?></td>
				

				<td>
					<a href="<?php echo 'controller/departementController.php?action=read&id=' . $departement->id ?>">
	  <button type="button" class="btn btn-success bt"name="modifier">modifier</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					</a>
				
					<a href="<?php echo 'controller/departementController.php?action=delete&id=' . $departement->id ?>">
<button type="button" class="btn btn-danger bt"name="suprimmer">suprimmer</button>&nbsp;&nbsp;&nbsp;

					</a>
				</td>
			</tr>
			<?php
					}
				}
			?>
		</table>


 
   	
		</div>
	</div>
		
	</div>

 
   

	</body>

</html>