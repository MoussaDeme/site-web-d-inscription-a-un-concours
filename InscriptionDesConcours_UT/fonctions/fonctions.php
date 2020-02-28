<?php
   /*------------  FONCTION PERMETTANT DE FAIRE UN ALERTE SUIVANT UNR CHAINE DONNEE EN PARAMETRE ---------------*/
   function alerte($ch)
   { 
    echo "<script type=\"text/javascript\"> alert('$ch'); </script>";
    return TRUE;
   }
   /*---------------------------------fin fonctions-----------------------------------------*/
   function validation_form()
   {
    /*<!--      validation du formulaire par le javascript            -->*/
    ?>
    <script>
         var validation = document.getElementById('bouton_envoi');
         var prenom = document.getElementById('prenom'); 
         var prenom_m = document.getElementById('prenom_manquant');
         var nom = document.getElementById('nom'); 
         var nom_m = document.getElementById('nom_manquant');
         var prenom_v = /^[a-zA-Zéçà][a-zé][a-zéçà]+([-'\s][a-zA-Zéçà][a-zé][a-zéçà]+)?/;  //controle de saisi ôur les noms autorisation des lettres seulement 
         validation.addEventListener('click', f_valid);
         
         function f_valid(e){
                        //verification si la donnee existe  
              if(prenom.validity.valueMissing){
                e.preventDefault();
                prenom_m.textContent = 'Prenom Manquant';
                prenom_m.style.color = 'red'; 
              } else if(prenom_v.test(prenom.value)== false){
                  event.preventDefault();
                  prenom_m.textContent = 'FORMAT INCORRECT';
                  prenom_m.style.color = 'orange';
              }
              if(nom.validity.valueMissing){
                e.preventDefault();
                nom_m.textContent = 'nom Manquant';
                nom_m.style.color = 'red'; 
              } else if(prenom_v.test(nom.value)== false){
                  event.preventDefault();
                  nom_m.textContent = 'FORMAT INCORRECT';
                  nom_m.style.color = 'orange';
              }                                 
         }
    
    </script>
    <!--       fin validation du formulaire par le javascript            -->
       
    <?php
   }
?>