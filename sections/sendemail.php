<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

        $email_from = $email;
        $email_to = 'info@arturomusic.com.ve';//replace with your email

        $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

        $success = mail ($email_to, $subject, $body, 'From: <'.$email_from.'>');

        header('Content-type: application/json');
        $status = array(
            'type'=>'success',
            'message'=>'Gracias por contactarnos.'
        );

        echo json_encode($status);
    die;
?>