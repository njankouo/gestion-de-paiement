


<?php 

/********************** Gestion des erreurs *************/


session_start();
$intervenant= null;

if(isset($_SESSION['intervenant']) == true) {
  $intervenant= $_SESSION['intervenant'];
}


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
?>

<!DOCTYPE html>
<html>
<head>
	<title>mon intervenant</title>
</head>
<link rel="stylesheet" type="text/css" href="cascade/cascade.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="jqueryui/jquery-ui.min.js"></script>
</script>
<style type="text/css">
  .color{
    background-color: rgb(0,28,55);
  }
  .sidebar{
  position:left;
  width: 250px;
  height: 575px;
  background:rgb(0,28,55);
  color: #fff;
  outline:1px solid white;
}
body{
  margin: 0;
  overflow: hidden;
}
.sidebar a{
  color: #fff;
  text-decoration: none;
}
.sidebar ul{
  list-style: none;
  padding: 0;
  margin: 0;
}
.sidebar li{
  outline:1px solid white;
  transition-property: border;
  transition-duration: 0.5s;
}
.sidebar li:hover{
  background:rgb(0,50,100);
  border-left: 5px solid #666;
}
.sidebar a{
  display: block;
  color: #fff;
  text-decoration: none;
  padding: 18px;
}
.valeur{
  width: 180px;
  height: 180px;
  position: absolute;
  background: #eee;
  padding: 25px;
}
.menu{
  cursor: pointer;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
p{
  font-size: 18px;
}
.reduction{
  width: 75px;
  height: 75px;
  margin-top: 35px;
}

</style>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
    <nav class="navbar navbar-expand-lg navbar-light col-md-12 color">
         
                <div class="col-md-12 form-inline">
             <p class="text-light">formulaire D'ajout des intervenants</p>
                 
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            </nav> 
</div>
<div class="col-md-3">
<div class="sidebar">
 <center><img src="glp.png" class="rounded-circle reduction"></center> <br><br>
  <ul>
     <li><a href="<?php echo ('parc.php'); ?>">liste des fournisseurs</a></li> 
      <li><a href="<?php echo ('mat_affiche.php'); ?>">liste des materiaux</a></li> 

  <li><a href="<?php echo ('logiciel_affiche.php'); ?>">liste des logiciels</a></li>
     <li><a href="<?php echo ('intervenant_affiche.php'); ?>">liste des intervenants</a></li>
      <li><a href="<?php echo ('intervention_affiche.php'); ?>">liste des interventions</a></li>
     <li><a href="<?php echo ('marque_affiche.php'); ?>">liste des marques</a></li>
    
     <li><a href="<?php echo ('departement_affiche.php'); ?>">liste des departements</a></li><br>
    
  </ul>

</div>
  
</div>

<div class="col-md-9"><br><br><br><br>
  <div class="row">



           <div class="col-md-6">
           <form name="form" action="controller/intervenantController.php?action=update" method="POST" form="inline_group">
           <label for="id">
            
          </label>
          <input type="text" name="id" id="id" hidden required  value="<?php echo $intervenant->id ?>" />

    
  

    <label for="nom">nom</label>
    <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="entrez le nom"required   value="<?php echo $intervenant->nom?>"> 
    
 

     </div> 
     <div class="col-md-6"> 
      <label for="prenom">prenom</label>
    <input type="text" class="form-control" name="prenom" id="formGroupExampleInput" placeholder="entrez le prenom"required  value="<?php echo $intervenant->prenom ?>">
     
    </div>   <br> 
    
     <div class="col-md-6"> <br>
      <label for="telephone">telephone</label>

    <input type="text" class="form-control" name="telephone" id="formGroupExampleInput" placeholder="entrez le numero de telephone"required  value="<?php echo $intervenant->telephone ?>">
  
     </div>  
      <div class="col-md-6"> <br>
      <label for="type">type intervention</label>

    <input type="text" class="form-control" name="type_intervention" id="formGroupExampleInput" placeholder="entrez le type d'intervenant"required  value="<?php echo $intervenant->type_intervention ?>">
     
    
</div> <br> 
     </div> <br>    
  <input type="submit" class="btn btn-success bt"name="submit" value="confirmer">&nbsp;&nbsp;&nbsp;
 
        </div>  
     </div>   <br>  
     

</div><br>
    

   </form>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


</body>
</html>