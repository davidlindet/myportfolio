<?php
    require_once('recaptchalib.php');
    require_once('privateKey.php');

    $resp = recaptcha_check_answer ($privatekey,
        $_SERVER["REMOTE_ADDR"],
        $_POST["recaptcha_challenge_field"],
        $_POST["recaptcha_response_field"]);

    $lang = !empty($_POST['lang']) ? $_POST['lang'] : "FR";

    if (!$resp->is_valid) {
        $error = $lang == "FR" ? 'Mauvais captcha! Rechargez le!' : 'Wrong captcha! Reload it!';
        $response = array('success' => false, 'error' => $error);
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

            $msg = $lang == "FR" ? 'Votre message a bien été envoyé !' : 'Message sent !';
            $response = array('success' => true, 'message' => $msg);
        }
    }

    echo json_encode($response);
