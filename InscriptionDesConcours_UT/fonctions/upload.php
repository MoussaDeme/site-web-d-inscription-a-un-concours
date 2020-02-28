 <?php
            session_start();
            if (isset($_POST['valider'])) {
                if (isset($_FILES['seconde1']) AND $_FILES['seconde1']['error'] == 0) {
                        

                $avatar = $_FILES['identite'];
                $avatar1 = $_FILES['seconde1'];
                $avatar2 = $_FILES['seconde2'];
                $avatar3 = $_FILES['premiere1'];
                $avatar4 = $_FILES['premiere2'];
                $avatar5 = $_FILES['terminale1'];
                $nom = basename($avatar['name']);
                $chemin = 'scan/' . $nom;
                $nom1 = basename($avatar1['name']);
                $chemin1 = 'scan/' . $nom1;
                $nom2 = basename($avatar2['name']);
                $chemin2 = 'scan/' . $nom2;
                $nom3 = basename($avatar3['name']);
                $chemin3 = 'scan/' . $nom3;
                $nom4 = basename($avatar4['name']);
                $chemin4 = 'scan/' . $nom4;
                $nom5 = basename($avatar5['name']);
                $chemin5 = 'scan/' . $nom5;
                
        
        
                 //extesions
               $extensionsValides = array('png','jpeg','gif','jpg');
               $exetensionUpload = strtolower(substr(strrchr($_FILES['identite']['name'],'.'),1));
        
        
                if(in_array($exetensionUpload,$extensionsValides))
                  {
                
                        
                    if (move_uploaded_file($avatar['tmp_name'], $chemin) AND move_uploaded_file($avatar1['tmp_name'], $chemin1) AND move_uploaded_file($avatar2['tmp_name'], $chemin2) AND move_uploaded_file($avatar3['tmp_name'], $chemin3) AND move_uploaded_file($avatar4['tmp_name'], $chemin4) AND move_uploaded_file($avatar5['tmp_name'], $chemin5)) {
                        $req=$cnc->prepare('INSERT INTO pieces (identite,seconde1,seconde2,premiere1,premiere2,terminale1,nomConcour) VALUES (:v1,:v2,:v3,:v4,:v5,:v6,:v7)');
        
                                $req->execute(array(
                                        
                        'v1' => $nom,
                        'v2' => $nom1,
                        'v3' => $nom2,
                        'v4' => $nom3,
                        'v5' => $nom4,
                        'v6' => $nom5,
                        'v7' => $nom6,
                    ));
                    
                    $req2=$cnc->query('select id from pieces where id in(select MAX(id) from pieces)');
           
                    while($donnes=$req2->fetch())
                     {
                      
                             $id=$donnes['id'];
                     }  

                     $req1=$cnc->prepare('INSERT INTO inscrit (id,email) VALUES (:v1,:v2)');
                  $req1->execute(array(
                               
                  'v1' => $id,
                  'v2' => $_SESSION['email'],
               
           ));
                } //fermeture du if in_array
                else{ echo 'erreur dextension'; }
                        }
                } 
        }
 ?>