<!DOCTYPE html>
<html lang="en">
  <head>
     <title>ADMIN</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="decor.css">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     
    </head>
   
   <body>
      <?php include("tete.php"); ?>
      <?php include("fonctions/connexionBD.php"); ?> 
      <?php $req=$cnc->query('select *from candidat,inscrit,pieces where candidat.email=inscrit.email AND pieces.id=inscrit.id');  
        //$req=$req->fetchALL(2); //
        //var_dump($req);   //fonction permettant d'afficher le contenu de la variable req
      echo '<div class="table-responsive">';
        echo '<table class="table-striped" border="5px" >';
            echo '<caption><h2>LISTE DES CANDIDATS INSCRIT</h2></caption>';
            echo '<tr><th>NOM</th> <th>PRENOM</th><th>EMAIL</th><th>CARTE D\'IDENTITE </th><th>BULLETIN SECONDE S1</th><th>BULLETIN SECONDE S2</th><th>BULLETIN PREMIERE S1</th><th>BULLETIN PREMIERE S2</th><th>BULLETIN TERMINALE S1</th><th>OPERATION</th></tr>';
        while($donnes=$req->fetch())
        {
            
                     echo "  <tr class=\"info\"> <td>".$donnes['nom']." </td> <td>".$donnes['prenom']." </td><td>".$donnes['email']." </td>";?> <td><a href="scan/<?php echo $donnes['identite']?>"><img src="scan/<?php echo $donnes['identite']?>" style="height:100px; width:125px;"></a></td><td><a href="scan/<?php echo $donnes['seconde1']?>"><img src="scan/<?php echo $donnes['seconde1']?>" style="height:100px; width:125px;"></a></td><td><a href="scan/<?php echo $donnes['seconde2']?>"><img src="scan/<?php echo $donnes['seconde2']?>" style="height:100px; width:125px;"></a></td><td><a href="scan/<?php echo $donnes['premiere1']?>"><img src="scan/<?php echo $donnes['premiere1']?>" style="height:100px; width:125px;"></a></td><td><a href="scan/<?php echo $donnes['premiere2']?>"><img src="scan/<?php echo $donnes['premiere2']?>" style="height:100px; width:125px;"></a></td><td><a href="scan/<?php echo $donnes['terminale1']?>"><img src="scan/<?php echo $donnes['terminale1']?>" style="height:100px; width:125px;"></a></td><?php echo "<td><a href=\"valider.php?idmotif=".$donnes['id']."\"><button>valider</button></a><a href=\"supprimer.php?idsupp=".$donnes['id']."\"><button>supprimer</button></a> </td></tr>";

        }
          echo '</table>';
          echo '</div>';
          ?>
           <div class="fo">
             <p>&copy copyrigth thies 2018 <br> tout droit reserve <span style="float: right">nous contacter!</span></p>
           </div>
      </body>
          
</html>