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
         $req1=$cnc->prepare('delete  from inscrit where id= :v4 AND inscrit.email= :v5');
         $req1->execute(array('v4'=>$_GET['idmotif2'],'v5'=>$_GET['emailmotif2']));
         
         $req=$cnc->prepare('delete   from pieces where id= :v1');
        $req->execute(array('v1'=>$_GET['idmotif2']));
    
        header('location: administrateur.php');
    ?>
  
  <div class="fo">
       <p>&copy copyrigth thies 2018 <br> tout droit reserve <span style="float: right">nous contacter!</span></p>
     </div>
  </body>
      
</html>