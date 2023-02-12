<?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $name = "=?UTF-8?B?".base64_encode($name )."?=";
        $mailForm = $_POST['mail'];
        $mailForm= "=?UTF-8?B?".base64_encode($mailForm)."?=";
        $message = $_POST['message'];

        $mailTo = "connect@webmiller.hu";
        $headers = "From:".$mailForm;
        $txt = "Üzenet tőle ".$name.$message;

        mail($mailTo, $name, $txt, $headers);

        header("location: succes.html");
    }

    

 
?>