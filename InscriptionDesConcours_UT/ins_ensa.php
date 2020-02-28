<!DOCTYPE html>
<html lang="en">
  <head>
     <title>INS_ENSA</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="decor.css">

     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

     
    </head>
   
   <body>
      <?php include("tete.php"); ?>


          <form method="post" action="ins_ensa.php" enctype="multipart/form-data">

                   <label for="prenom">carte d'identite</label> <br>
        <input type="file" id="val2" name="identite" > <br>
         
        <label for="prenom">bulletin 1 seconde</label> <br>
        <input type="file" id="val2" name="seconde1" > <br>
        <label for="prenom">bulletin 2 seconde</label> <br>
        <input type="file" id="val2" name="seconde2" > <br>
        <label for="prenom">bulletin 1 premiere</label> <br>
        <input type="file" id="val2" name="premiere1" > <br>
        <label for="prenom">bulletin 2 premiere</label> <br>
        <input type="file" id="val2" name="premiere2" > <br>
        <label for="prenom">bulletin 1 terminale</label> <br>
        <input type="file" id="val2" name="terminale1" > <br>
        <br>


       <input type="submit" value="valider" name="valider"> <br>

       </form>

       <?php include("fonctions/connexionBD.php"); ?>
                
       <?php $nom6= "ENSA"; include("fonctions/upload.php"); ?>
       <?php /* include("fonctions/insertionInscrit.php"); */?>
       <img src="photos/footer1.jpg" alt="">        
      
       <div class="fo">
       <p>&copy copyrigth thies 2018 <br> tout droit reserve <span style="float: right">nous contacter!</span></p>
     </div>
      
      </body>
     

  </html>