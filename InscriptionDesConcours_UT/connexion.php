<!DOCTYPE html>
<html lang="en">
  <head>
     <title>CONNEXION</title>
     <meta charset="utf-8">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="decor.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     
     <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
     <link href="signin.css" rel="stylesheet">-->

     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

     
    </head>
   
   <body>
      <?php include("tete.php"); ?>
      <?php include("fonctions/fonctions.php"); ?>
      
        
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
      <form method="post" action="connexion.php" class="form-signin">
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">se connecter</h1>
      <label for="inputEmail" class="sr-only">adresse e-mail</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="email" id="inputEmail" class="form-control" name="email" placeholder="adresse e-mail" required autofocus>
      </div>
      <br>
      <label for="inputPassword" class="sr-only">mot de passe</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input type="password" id="inputPassword" class="form-control" name="pwd" placeholder="mot de passe" required>
      </div>
      
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> se souvenir
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="connexion">connexion</button>
      
    </form>
    </div>  
  </div>
    <?php include("fonctions/connexionBD.php"); ?>    
    <?php include("fonctions/validationConnexionCcompte.php"); ?>
      <a href="javascript:window.history.back()"> <button>retour</button></a> <br>
      

      <div class="fo">
       <p>&copy copyrigth thies 2018 <br> tout droit reserve <span style="float: right">nous contacter!</span></p>
     </div>
             
  </body>
</html>