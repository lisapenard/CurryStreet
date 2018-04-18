<?php
 $to      = 'jayminp@hotmail.fr';
     $subject = 'Demande de contact de ' . $_POST['entreprise'];
     $message = 'email:' . $_POST['email'] . " \r\n" .
		 'tel:' . $_POST['tel'] . "\r\n" .
		 'type event:' . $_POST['type_evenement'] . "\r\n" .
		 'date:' . $_POST['date'] . "\r\n" .
		 'lieu:' . $_POST['lieu'] . "\r\n" .
		 'nombre invités:' . $_POST['invites'] . "\r\n" .
		 'infos:' . $_POST['infos'] . "\r\n";



     $headers = 'From: webmaster@example.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
header('Location:' . dirname(__DIR__) . 'index.html');
?>