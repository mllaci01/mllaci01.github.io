<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'MolnárWeb oldal';
    $email_subject = 'Új üzenet a MolnárWeb oldalről';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n". 
                  "Message: $message.\n";
                  
    $to ="itmolnarweb@gmail.com";
    $headers ="From: $email_from \r\n";
    $headers .="Reply-to: $email \r\n";
    
    mail($to, $email_subject, $email_body, $headers);

    header("location: index.html");
?>