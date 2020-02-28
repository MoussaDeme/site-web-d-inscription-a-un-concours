 <?php
     //include phpmailerautoload.php
         require 'phpmailer/PHPMailerAutoload.php';

     //create an instance of phpmailer
          $mail = new PHPMailer();
     //set a host
            $mail->Host = "smtp.gmail.com"
     //enable smtp
             //$mail->isSMTP();

     //set authentification
       //$mail->SMTPAuth = true;
     //set login deails for gmail account
     //$mail->Username="moussademe97@gmail.com";
     //$mail->Password = "kanedeme";

     //set login ttpe of protection
     $mail->SMTPSecure = "ssl"; //or we can use TLS 
     //set a port
     $mail->Port = 465; //or 587 if TLS
     //set subject
     $mail->Subject = "test email";
     //set body
     $mail->Body = "this is our body...";
     //set who is sending an email
     $mail->setFrom(address'moussademe97@gmail.com', name'DEMZA');
     //set where we are sending email (recipients)
     $mail->addAddress(adress'moussademe97@gmail.com');
     //send a mail
        if($mail->Send())
              echo 'mail envoye';
        else 
            echo 'mail non envoye';
 
 ?>