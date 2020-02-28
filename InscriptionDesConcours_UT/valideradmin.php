  
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

  
  <?php
         include("fonctions/connexionBD.php");
         $contenu = "VOTRE CANDIDATURE A ETE RETENU VOUS RECEVEREZ TOUTE LES INFORMATIONS CONCERNANT LE LIEU DE CONCOURS, VOTRE NUMERO DE TABLE VIA VOTRE ADRESSE E-MAIL. BONNE CHANCE A VOUS";
         $req=$cnc->prepare('INSERT INTO message (contenu,email_candidat) VALUES (:v1,:v2)');
         $req->execute(array('v1'=>$contenu,'v2'=>$_GET['emailmotif2']));
    ?>
    <script type="text/javascript"> alert('VALIDATION REUSSI');</script>
  <?php  header('location: administrateur.php');?>
  
  <div class="fo">
       <p>&copy copyrigth thies 2018 <br> tout droit reserve <span style="float: right">nous contacter!</span></p>
     </div> 
  </body>
      
</html>  
  