<!DOCTYPE html>
<html lang="en">
  <head>
     <title>COMPTE</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="decor.css">
     
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     
    </head>
   
   <body>
      <?php include("tete_compte.php"); ?>
      <?php include("fonctions/accesCompte.php"); ?>
      <?php affichageCompte(); ?>
      
           
      <div class="container-fluid" style="background: lightblue">
                        <div class="container">
                           <div class="row">
                                <article class="col-md-4">
                                    <img src="photos/ensa.jpg" class="img-circle" alt="Cinque Terre" width="200" height="150">
                                    <h1>  ENSA</h1>
                                    <p>
                                    L’École Nationale Supérieure d´Agriculture de Thiés (ENSA), intégrée depuis 2006 à l´Université de Thiès <br>dont elle constitue le pôle agronomique, forme des ingénieurs agronomes pond aux enjeux nationaux et internationaux de l´agriculture et du développement. <br> <a href="">voir la suite</a>

                                    </p>
                                    <a href="ins_ensa.php"> <button type="button" class="btn btn-primary">S'inscrire</button></a>
                                </article>
                                <article class="col-md-4">
                                    <img src="photos/isfar.jpg" class="img-circle" alt="Cinque Terre" width="200" height="150">                             
                                    <h1>ISFAR</h1>
                                    <p>
                                    L’institut forme dans la filière agronomique avec des études sanctionnées après 3 années ou 6 semestres<br> d’apprentissage par un diplôme d’Ingénieur des Travaux en Sciences Agronomiques dans les spécialités suivantes: <br> <a href="">voir la suite</a>

                                    </p>
                                    <a href="ins_isfar.php"> <button type="button" class="btn btn-primary">S'inscrire</button></a>
                                </article>
                                <article class="col-md-4">
                                    <img src="photos/iut.jpg" class="img-circle" alt="Cinque Terre" width="200" height="150">
                                    <h1>IUT</h1>
                                    <p>
                                    L’Institut Universitaire de Technologie (I.U.T.) de l’Université de Thiès organise le mercredi 30 mai 2018 à 14h00, dans les villes de Dakar,<br> Guédiawaye, Rufisque, Thiès, Mbour, Diourbel, Kaolack, Louga, St-Louis et Ziguinchor... <br> <a href="">voir la suite</a>
                                    </p>
                                    <a href="ins_iut.php"> <button type="button" class="btn btn-primary">S'inscrire</button></a>
                                </article> 
                               
                           </div>
                        </div>
                
                   <br><br><br><br>
                    <?php   
                          include("fonctions/connexionBD.php");
                          

                          $req=$cnc->prepare('select * from message where email_candidat = :email_candidat');
                          $req->execute(array(
                         'email_candidat' => $_SESSION['email'],
                          ));
                         while($donnes=$req->fetch())
                         {
                          echo '<p><div class="parag">'.$donnes['contenu'].'</div></p>';
                         }
                    ?>
        </div>
        <div class="fo">
       <p>&copy copyrigth thies 2018 <br> tout droit reserve <span style="float: right">nous contacter!</span></p>
     </div>   
     </body>
 </html>


















 