 <?php
    require_once('phpmailer/src/PHPMailer.php');

    $mail->SMTPOptions = array('ssl' => 
   array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true));

      require'votre/dossier/PHPMailerAutoload.php';

      $mail = new PHPmailer();

      $mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP 
      $mail->Host = 'mail.votredomaine.com'; // Spécifier le serveur SMTP
      $mail->SMTPAuth = true; // Activer authentication SMTP
      $mail->Username = 'moussademe97@gmail.com'; // Votre adresse email d'envoi
      $mail->Password = 'kanedeme'; // Le mot de passe de cette adresse email
      $mail->SMTPSecure = 'ssl'; // Accepter SSL
      $mail->Port = 465;
      
      $mail->setFrom('moussademe97@gmail.com', 'Mailer'); // Personnaliser l'envoyeur
      $mail->addAddress('moussademe97@gmail.com', 'Karim User'); // Ajouter le destinataire
      $mail->addAddress('moussademe97@gmail.com'); 
      $mail->addReplyTo('moussademe97@gmail.com', 'Information'); // L'adresse de réponse
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');
      
      //$mail->addAttachment('/var/tmp/file.tar.gz'); // Ajouter un attachement
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); 
      $mail->isHTML(true); // Paramétrer le format des emails en HTML ou non
      
      $mail->Subject = 'Here is the subject';
      $mail->Body = 'This is the HTML message body';
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      if(!$mail->send()) {
        echo 'Erreur, message non envoyé.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
     } else {
        echo 'Le message a bien été envoyé !';
     }
 
 ?>