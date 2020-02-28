  <?php
        
        if (isset($_POST['valider'])) 
        {
          
            $email = $_POST['email'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $adresse = $_POST['adresse'];
    
            $tel = $_POST['tel'];
            $date = $_POST['date'];
            $pwd = $_POST['pwd'];
             

            $req=$cnc->prepare('INSERT INTO candidat (email,nom,prenom,adresse,tel,date,pwd) VALUES (:v1,:v2,:v3,:v4,:v6,:v7,:v8)');
                

			$req->execute(array(
				
                'v1' => $email,
                'v2' => $nom,
                'v3' => $prenom,
                'v4' => $adresse,
            
                'v6' => $tel,
                'v7' => $date,
                'v8' => $pwd,
                
                
            ));
            echo '<div class="alert alert-success" role="alert">
  inscription fait avec succes!
</div>';
       echo '<script> alert("inscription fait avec succes!")</script>';

        }
  
  ?>