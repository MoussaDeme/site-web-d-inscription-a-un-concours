 <?php
           
           

           $req2=$cnc->query('select id from pieces where id in(select MAX(id) from pieces)');
           
           while($donnes=$req2->fetch())
            {
             
                    $id=$donnes['id'];
            }
           /*a continuer l'insertion dans la table inscrit*/
            echo $id;
             
           /*$req1=$cnc->prepare('INSERT INTO inscrit (id,email) VALUES (:v1,:v2)');
           $req1->execute(array(
                               
               'v1' => $id,
               'v2' => $_SESSION['email'],
               
           ));*/
          
 
 ?>