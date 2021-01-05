<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>interface d'acceuil</title>


</head>
<link rel="stylesheet" type="text/css" href="cascade/cascade.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <link rel="stylesheet" href="bootstrap4-glyphicons-master\bootstrap4-glyphicons\css\bootstrap-glyphicons.css">


    <link rel="stylesheet" a href="jquery-ui-1.12.1.custom (1)/jquery-ui-1.12.1.custom/jquery-ui.css">
    <script src="jquery-ui-1.12.1.custom (1)/jquery-ui-1.12.1.custom/jquery-ui.js">
</script>


    <script src="jquery-3.4.1.min.js"></script>
   
<script>
       $(document).ready(function() {
  //toggle the component with class accordion_body
  $(".accordion_head").click(function() {
    if ($('.accordion_body').is(':visible')) {
      $(".accordion_body").slideUp(300);
      $(".plusminus").text('+');
    }
    if ($(this).next(".accordion_body").is(':visible')) {
      $(this).next(".accordion_body").slideUp(300);
      $(this).children(".plusminus").text('+');
    } else {
      $(this).next(".accordion_body").slideDown(300);
      $(this).children(".plusminus").text('-');
    }
  });
});

    </script>


<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
	 <nav class="navbar navbar-expand-lg navbar-light bg-info link col-md-12">
                <div class="col-md-4">
                    <img src="glp.png" width="15%" class="rounded-circle n">&nbsp;GESTION DU PARC INFORMATIQUE
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
</nav>
<div class="col-md-12 vue"><br><br>
  <center><img src="glp.png" width="40%" height="30%" class="rounded-circle"> </center>
                <hr/>


                    <div class="accordion_head">
                 <span class="glyphicon glyphicon-home">&nbsp;ACCEUIL</span>
                 <span class="plusminus">+</span>
                 </div>

                  
                     <div class="accordion_head">
                 <span class="glyphicon glyphicon-user">&nbsp;GESTION MATERIAUX</span>
                 <span class="plusminus">+</span>
                 </div>



  <div class="accordion_body" style="display: none;">
    <p>
      
<ul>
                                <li class="text-white"><a href="materiel.php">ajouter du materiel</a></li>
                                <li class="text-white"><a href="mat_affiche.php">liste du materiel</a></li>
                                  
                         

                            </ul>
                     

    </p>
  </div>




  <div class="accordion_head"><span class="glyphicon glyphicon-cog">&nbsp;GESTION LOGICIELS</span><span class="plusminus">+</span></div>

  <div class="accordion_body" style="display: none;">
    <p>
      
<ul>
                                <li class="text-white"><a href="logiciel_affiche.php">liste des logiciels</a></li>
                                <li class="text-white"><a href="logiciel.php">ajouter un logiciel</a></li>
                            </ul>

    </p>
  </div>


  <div class="accordion_head"><span class="glyphicon glyphicon-cog">&nbsp;GESTION FOURNISSEUR5</span><span class="plusminus">+</span></div>
  <div class="accordion_body" style="display: none;">
    <p>
      

 <ul>
                                <li class="text-white"><a href="parc.php">liste des fournisseurs</a></li>

                                <li class="text-white"><a href="acceuil.php">ajout du fournisseur</a></li>
                            </ul>


    </p>
  </div>
                <div class="accordion_head"><span class="glyphicon glyphicon-cog">&nbsp;GESTION INTERVENANT</span><span class="plusminus">+</span></div>
  <div class="accordion_body" style="display: none;">
    <p>
      

<ul>
                                <li class="text-white"><a href="intervenants_affiche.php">AFFICHER les intervenants</a></li>
                                <li class="text-white"><a href="intervenant.php">ajouter un intervenant</a></li>
                            </ul>

    </p>
  </div>
  <div class="accordion_head">
<span class="glyphicon glyphicon-user">&nbsp;GESTION INTERVENTION</span>
  <span class="plusminus">+</span></div>
  <div class="accordion_body" style="display: none;">
    <p>
      

 <ul>
                                <li class="text-white"><a href="intervenantion_affiche.php">liste des interrventions</a></li>
                                 <li class="text-white"><a href="intervenantion.php">ajout des interrventions</a></li>
                            </ul>
    </p>
  </div>
 
              <div class="accordion_head">
<span class="glyphicon glyphicon-cog">&nbsp;GESTION MARQUE</span>
              <span class="plusminus">+</span></div>
  <div class="accordion_body" style="display: none;">
    <p>

 <ul>
                                <li class="text-white"><a href="marque_affiche.php">liste des marques</a></li>
                                <li class="text-white"><a href="marque.php">ajouter une marque</a></li>
                              
                            </ul>
    </p>
  </div>
  <div class="accordion_head">

<span class="glyphicon glyphicon-user">&nbsp;GESTION DEPARTEMENT</span>

  <span class="plusminus">+</span></div>
  <div class="accordion_body" style="display: none;">
    <p>
      
<ul>
                                <li class="text-white"><a href="departement_affiche.php">liste des departements</a></li>
                                 <li class="text-white"><a href="departement.php">ajout d'un departement</a></li>


                            </ul>

    </p>
  </div>
  <div class="accordion_head">


<span class="glyphicon glyphicon-user">&nbsp;RETOUR</span>

  <span class="plusminus">+</span></div>
  <div class="accordion_body" style="display: none;">
  

  
 </div>

 </div>
</div>

</div>
	</div>
</div>




</body>
</html>