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
       
       
        
           <table>
                
                
                    <br><br>
                    <tr><td>Prenom :    </td><td><span ><?php echo $_GET['prenommotif'];?></span></td></tr>
                    <tr><td>Nom    :    </td><td><?php echo $_GET['nommotif'];?></td></tr>
                    <tr><td>Email  :    </td><td><?php echo $_GET['emailmotif'];?></td></tr>
                                                                 
            </table>
            
            
            <?php
                $req=$cnc->prepare('select *from pieces where id= :v1');
                $req->execute(array('v1'=>$_GET['idmotif']));
             
            while($donnes=$req->fetch())
           {      
                 
               ?> 
               <table style="align : center;">
                   <th>nom pieces </th><th>pieces</th>
                 <div class="tof">
                      
                      <tr> <td><span>CARTE D'IDENTITE</span></td><td><a href="scan/<?php echo $donnes['identite']?>"><img src="scan/<?php echo $donnes['identite']?>" style="height:100px; width:125px;"></a></td></tr>
                     <tr> <td><span>BULLETIN SECONDE SEMESTRE 1</span></td><td><a href="scan/<?php echo $donnes['seconde1']?>"><img src="scan/<?php echo $donnes['seconde1']?>" style="height:100px; width:125px;"></a></td></tr>
                       
                  </div>
                </table>
                  <a href="valideradmin.php?emailmotif2=<?php echo $_GET['emailmotif']?>"><button class="btn btn-primary"> <span class="glyphicon glyphicon-ok"></span> valider</button></a>
                  <a href="supprimeradmin.php?idmotif2=<?php echo $_GET['idmotif']?>&emailmotif2=<?php echo $_GET['emailmotif']?>"><button class="btn btn-primary"> <span class="glyphicon glyphicon-remove"></span> supprimer</button></a>
           <?php
            }
           ?> 

          <div class="fo">
              <p>&copy copyrigth thies 2018 <br> tout droit reserve <span style="float: right">nous contacter!</span></p>
         </div> 
      </body>
          
  </html>