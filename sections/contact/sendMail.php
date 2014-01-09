<?php
    require_once('recaptchalib.php');
    require_once('privateKey.php');

    $resp = recaptcha_check_answer ($privatekey,
        $_SERVER["REMOTE_ADDR"],
        $_POST["recaptcha_challenge_field"],
        $_POST["recaptcha_response_field"]);

    if (!$resp->is_valid) {
        $response = array('success' => false, 'error' => 'Wrong captcha! Reload it!');
    } else {
        if(!empty($_POST) && !empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message'])){

            $name = strip_tags($_POST['name']);
            $subject = strip_tags($_POST['subject']);
            $email = strip_tags($_POST['email']);
            $message = strip_tags($_POST['message']);

            $subject = 'PORTFOLIO: '.$subject;
            $myEmail = 'contact@david-lindet.fr';
            $headers ='From: '.$name.'<'.$email.'>';

            // ini_set('sendmail_from', $email);
            mail($myEmail, $subject, $message, $headers);

            $response = array('success' => true, 'message' => 'Votre message a bien été envoyé !');
        }
    }

    echo json_encode($response);
