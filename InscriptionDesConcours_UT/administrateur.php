<!DOCTYPE html>
<html lang="en">
  <head>
     <title>ADMININISTRATEUR</title>
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
       echo '<div class="table-responsive">';
        echo '<table class="table-striped" border="5px" >';
            echo '<caption><h2>LISTE DES CANDIDATS INSCRIT</h2></caption>';
            echo '<tr><th>NOM</th> <th>PRENOM</th><th>EMAIL</th>0</tr>';
        while($donnes=$req->fetch())
        {    

                    /*echo  '<form action="details.php" method="get">';
                    echo              '<td><input type="hidden" name="nom1" value="'.$donnes["nom"].'"></td> </tr>'; 

                    echo    '</form>';*/
                     echo "  <tr class=\"info\"> <td>".$donnes['nom']." </td> <td>".$donnes['prenom']." </td><td>".$donnes['email']." </td><td><a href=\"details.php?idmotif=".$donnes['id']."&emailmotif=".$donnes['email']."&nommotif=".$donnes['nom']."&prenommotif=".$donnes['prenom']."\"><button class=\"btn btn-primary\">Details</button></a> </td></tr>";
                     
                     
        }
          echo '</table>';
          echo '</div>';
         
          ?>
    
    <div class="fo">
       <p>&copy copyrigth thies 2018 <br> tout droit reserve <span style="float: right">nous contacter!</span></p>
     </div>
     </body>
          
  </html>