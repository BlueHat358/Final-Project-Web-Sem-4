<?php
    require_once "../vendor/autoload.php";

    try{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $email_body = "Nama: $name. \n". "<br>".
                    "Email: $email. \n". "<br>".
                    "Pesan: $message. \n". "<br>";
        $to = "kurniawan@bluehat358.my.id";

        $transport = (new Swift_SmtpTransport('smtp.hostname', 465, 'ssl'))
        ->setUsername('no-reply@bluehat358.my.id')
        ->setPassword('passemail');

        $mailer = new Swift_Mailer($transport);
        $sent = (new Swift_Message('Email from bluehat358.my.id'))
                    ->setFrom([$email])
                    ->setTo([$to])
                    ->setBody($email_body, 'text/html');

        $result = $mailer->send($sent);

        header("Location: ../");
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>