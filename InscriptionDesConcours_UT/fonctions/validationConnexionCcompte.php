<?php

if (isset($_POST['connexion']))
{
    $req=$cnc->prepare('select * from candidat where email = :email AND pwd = :pwd');
    $req->execute(array(
            'email' => $_POST['email'],
            'pwd'  => $_POST['pwd']
    ));
    
    $reponse = $req->fetch();
    if(!$reponse)
    {
       echo '<div class="alert alert-danger" role="alert">
          VOTRE ADRESSE OU MOT DE PASSE EST INCORRECTE
     </div>
     ';
    }
    else
    {
      session_start();
      $_SESSION['nom'] = $reponse['nom'];
      $_SESSION['prenom'] = $reponse['prenom'];
      $_SESSION['email'] = $reponse['email'];
      $_SESSION['pwd'] = $reponse['pwd'];
      $_SESSION['email'] = $reponse['email'];

      header('location:compte.php');
    }

}

?>