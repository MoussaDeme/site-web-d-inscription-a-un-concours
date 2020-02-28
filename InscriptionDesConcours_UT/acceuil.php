<!DOCTYPE html>
<html lang="en">
  <head>
     <title>IDC_UT</title>
     <meta charset="utf-8">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="decor.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        
    </head>
   
   <body>
      <?php include("tete.php"); ?>
      


<section id="gor">
        <aside id="gor"> 
          <div class="gallery">
              <a target="_blank" href="photos/recteur.jpg">
              <img src="photos/recteur.jpg" alt="recteur" width="300" height="300">
              </a>
               <div class="desc"><p>chéres étudiantes, chers étudiants, vouus vous preparez depuis un certains temps a pousuivre vos etudes a l'universite de thies dans le cadre de la preparation d'un diplome...<a href="http://www.styleshout.com/">voir plus</a></p> </div>
          </div>
         </aside>
         <aside id="gor"  >
          <div class="gallery">
               <a target="_blank" href="photos/rec.jpg">
              <img src="photos/rec.jpg" alt="recteur" width="300" height="300">
              </a>
           <div class="desc"><p>RECTORAT</p> </div>
          </div>
         </aside>
         <aside id="gor"  >
             <div class="gallery">
              <a target="_blank" href="photos/logouniv.png">
              <img src="photos/logouniv.png" alt="recteur" width="300" height="300">
              </a>
              <div class="desc"><p>UNIVERSITE PUBLIQUE DU SENEGAL</p> </div>
            </div>
        </aside>
</section>

  <section id="go">
       <aside id="go"> 
             <div class="gallery">
            <a target="_blank" href="photos/sen.png">
              <img src="photos/sen.png" alt="recteur" width="300" height="300">
            </a>
            <div class="desc"><p>SENEGAL</p> </div>
             </div>
        </aside>
       <aside id="go"  >
            <div class="gallery">
            <a target="_blank" href="photos/ensa.jpg">
            <img src="photos/ensa.jpg" alt="recteur" width="300" height="300">
           </a>
            <div class="desc"><p>ENSA</p> </div>
          </div>
      </aside>
   <aside id="go"  >
   <div class="gallery">
    <a target="_blank" href="photos/iut.jpg">
    <img src="photos/iut.jpg" alt="recteur" width="300" height="300">
    </a>
     <div class="desc"><p>IUT</p> </div>
   </div>
   </aside>
   <aside id="go"  >
   <div class="gallery">
    <a target="_blank" href="photos/isfar.jpg">
    <img src="photos/isfar.jpg" alt="recteur" width="300" height="300">
    </a>
     <div class="desc"><p>ISFAR</p> </div>
   </div>
   </aside>
     </section>
     
      
      <div class="well" >
        <div class="desc">
  <h2 > <b class="text text-primary"> DESCRIPTION DE LA PLATEFORME</b></h2>
      <h4>
      <p> <b> IDC </b>(inscription des  concours de l'universite de thies) est une plateforme mise en place  pour permettre aux candidats ou titulaire du baccalaureat désirant faire les concours <b> d'ENSA ,d'IUT et d'ISFAR </b> de pouvoir faire leurs inscriptions en ligne sans pour autant eu a faire des déplacements au niveau des CAOSP ou au nivau des établissements concernés.<br> 
      A travers ce site ,vous y trouverez toutes les informations nécessaires concernant ces concours 
      les dossiers nécessaires pour vos candidatures,les lieux où vont se dérouler le concours, les formations offertes ces établissements ...
      
      </div></p></h4></div> 
      <!--                             deffillement d'image                                         --> 
      <!-- <div id="defilement">

          </div> 
      <!--                             fin d'effillement d'image -->                                         -->
      
          <!--  script permenttant le defillement d'images -->  
       <script>
      
                    var i = 0;
                    var images = [];
                    var time = 2000;
      
                    //image List
                    images[0] = 'photos/iut.jpg';
                    images[1] = 'photos/ut.jpg';
                    images[2] = 'photos/hotel.jpg';
                    
      
                    function changeImg(){
      
                         document.slide.src = images[i];
                         if (i< images.length-1)
                         {
                               i++;
                         }else{
                           i=0;
                         }
                         setTimeout("changeImg()", time);
      
                    }
                    window.onload = changeImg;
            
            </script>
         <img name="slide" width="900" height="400" class="img-rounded">
      <div class="col-md-6 col-md-offset-3">
      <a href="inscription.php">  <button type="button" class="btn btn-primary " title="appuyer pour cree un compte et pour pouvoir faire votre demande de candidature"> CREATION DE COMPTE </button></a>
      </div>
      
        <p> <br><br><br><br><br> </p>
       <a href="send-mail.pdf">tutoriel</a>

            
               
</div> 
     <!-- <p id="cod"><div class="gris">en appuyant sur inscription vous accepter nos conditions<br>generales,notre politiques d'utilisation de donnees et notre politiques<br>d'utilisation des cookies.vous receverez peut etre des<br> notifications par texto de notre part et vous pouvez a tout<br>moment désabonner.</div></p>-->
     <div class="fo">
       <p>&copy copyrigth thies 2018 <br> tout droit reserve <span style="float: right">nous contacter!</span></p>
     </div>
</body>
</html>

