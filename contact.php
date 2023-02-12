<?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = "connect@webmiller.hu";
        $headers = "From:".$email;
        $txt = "Üzenet tőle ".$name.$message;

        mail($mailTo, $name, $txt, $headers);

        header("location: succes.html");
    }

    

 
?>