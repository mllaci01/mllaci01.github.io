<?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailForm = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = "connect@webmiller.hu";
        $headers = "From:".$mailForm;
        $txt = "Üzenet tőle ".$name | 'n'.$message;

        mail($mailTo, $name, $txt, $headers);

        header("location: succes.html");
    }

    

 
?>