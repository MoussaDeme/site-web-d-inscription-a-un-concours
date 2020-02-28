<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Bootstrap Example</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
     
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="decor.css">
    </head>
   
   <body>
      <?php include("tete.php"); ?>
      <?php include("fonctions/fonctions.php"); ?>
       <div class="rem">
      <section>
      <div class="col-md-8 order-md-1">
          <h4 class="mb-3 compte"> <strong> CREATION DE COMPTE </strong></h4>
          <form method="post" action="inscription.php" class="needs-validation">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Prenom</label>
                <input type="text" class="form-control" name="prenom" placeholder="prenom" value="" id='prenom' required='required' maxlength='30'>
                <span id='prenom_manquant'></span>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="nom" value="" id="nom" required='required' maxlength='30'>
                <span id='nom_manquant'></span>
              </div>
            </div>

            <div class="mb-3">
             
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                
              </div>
            </div>

            
            <div class="mb-3">
              <label for="address">Address</label>
              
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input type="text" class="form-control" name="adresse" placeholder="EX: keur massar route de boune" value="" required='required' maxlength='30'>
              </div>  
            </div>
           
            <div class="mb-3">
              <label  for="address">telephone</label>
              
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input type="text"  class="form-control" name="tel"  placeholder="EX: 781541514" value="" required>
              </div>  
            </div>
            <div class="mb-3">
               <br> 
              homme <input type="radio" name="genr">
              Femme <input type="radio" name="genr"> <br> 
            </div>
            <div class="mb-3">
              <label for="address">date de naissance</label>
              
              <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span> 
              <input type="date" class="form-control" name="date" value=""  required>
              </div>  
            </div>
            
            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control" name="email" value="" placeholder="tour@example.com" required maxlength='40'>
              </div>  
            </div>
            <div class="mb-3">
              <label for="address">Mot de passe</label>
              
              <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="pwd" placeholder="dakar123323"  required='required' minlength='6' maxlength='8'>
              </div>  
            </div>
           <br> <br>
            <input type="submit" name="valider" value="valider" class='btn btn-primary bouton'> 
          </form>  
          <?php  validation_form() ?> <!--   controle de saisi du formulaire -->
        </section>
        </div>
        
        <section>
             <div class="col-md-4">
                <div class="thumbnail">
                   <a href="photoS/incrit2.png" target="_blank">
                      <img src="photoS/incrit2.png" alt="Lights" style="width:100%">
                      <div class="caption">
                      <p>La creation de compte est obligatoire pour tout candidat desirant de faire ces concours. <br> veuillez renseigner des informations fiable afin de pouvoir continuer votre inscription</p>
                     </div>
                   </a>
                 </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                   <a href="photoS/incrit2.png" target="_blank">
                      <img src="photoS/decor.jpg" alt="Lights" style="width:100%">
                                         </a>
                 </div>
              </div>
        </section>
      </div>   
            <?php include("fonctions/connexionBD.php"); ?>
            <?php include("fonctions/validationCreationCompte.php"); ?>
            
            <div class="fo">
       <p>&copy copyrigth thies 2018 <br> tout droit reserve <span style="float: right">nous contacter!</span></p>
     </div>
            

          </body>
</html>