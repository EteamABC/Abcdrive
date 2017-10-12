<?php

$recipients = 'nylanr@abcmotors.intnet.mu';
//$recipients = 'info@abcdrive.info';

try {
    require './phpmailer/PHPMailerAutoload.php';

    preg_match_all("/([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)/", $recipients, $addresses, PREG_OFFSET_CAPTURE);

    if (!count($addresses[0])) {
        die('MF001');
    }

    if (preg_match('/^(127\.|192\.168\.)/', $_SERVER['REMOTE_ADDR'])) {
        die('MF002');
    }

    $template = file_get_contents('rd-contact-us.tpl');

    $client_subject = $_POST['subject'];


    if (isset($_POST['form-type'])) {
        switch ($_POST['form-type']){
            case 'contact':
                $subject = 'ABC Drive Contact:'.' '.$client_subject;
                break;
            case 'subscribe':
                $subject = 'Subscribe request';
                break;
            case 'order':
                $subject = 'Order request';
                break;
            default:
                $subject = 'A message from your site visitor';
                break;
        }
    }else{
        die('MF004');
    }

    if (isset($_POST['name'])) {
        $template = str_replace(
            array("<!-- #{name} -->"),
            array($_POST['name']),
            $template);
    }

    if (isset($_POST['email'])) {
        $template = str_replace(
            array("<!-- #{FromState} -->", "<!-- #{FromEmail} -->"),
            array("Email:", $_POST['email']),
            $template);
    }else{
        die('MF003');
    }

    if (isset($_POST['subject'])) {
        $template = str_replace(
            array("<!-- #{subject} -->"),
            array($_POST['subject']),
            $template);
    }

    if (isset($_POST['message'])) {
        $template = str_replace(
            array("<!-- #{MessageState} -->", "<!-- #{MessageDescription} -->"),
            array("Message:", $_POST['message']),
            $template);
    }

    preg_match("/(<!-- #{BeginInfo} -->)(.|\n)+(<!-- #{EndInfo} -->)/", $template, $tmp, PREG_OFFSET_CAPTURE);
    foreach ($_POST as $key => $value) {
        if ($key != "message" && $key != "form-type" && $key != "g-recaptcha-response" && !empty($value)){
            $info = str_replace(
                array("<!-- #{BeginInfo} -->", "<!-- #{InfoState} -->", "<!-- #{InfoDescription} -->"),
                array("", ucfirst($key) . ':', $value),
                $tmp[0][0]);

            $template = str_replace("<!-- #{EndInfo} -->", $info, $template);
        }
    }

    $template = str_replace(
        array("<!-- #{Subject} -->", "<!-- #{SiteName} -->"),
        array($subject, $_SERVER['SERVER_NAME']),
        $template);

    $mail = new PHPMailer();
    $mail->From = $_POST['email'];

    if (isset($_POST['name'])){
        $mail->FromName = $_POST['name'];
    }else{
        $mail->FromName = "Site Visitor";
    }

    foreach ($addresses[0] as $key => $value) {
        $mail->addAddress($value[0]);
    }

        //Mail send to client
    // $recipients2 = $_POST['email'];
    // $template2 = file_get_contents('rd-contact-us-client.tpl');

    // if ($recipients2 != '') {
            $mail->CharSet = 'utf-8';
            $mail->setFrom($mail->From);
            $mail->FromName = 'ABC Drive';
            $mail->addAddress($mail->From);
            $mail->Subject = $subject; 
            $mail->MsgHTML($template);
            $mail->send();

    // } 

    // if ($recipients != '' && $recipients2 != '') {
    //         $mail->CharSet = 'utf-8';
    //         $mail->setFrom($mail->From);
    //         //$mail->addAddress('eteamemarketing@gmail.com');
    //         $mail->Subject = $subject; 
    //         $mail->MsgHTML($template);
    //         $mail->send();
    // }




    // $mail->CharSet = 'utf-8';
    // $mail->setFrom('eteamemarketing@gmail.com');
    // $mail->FromName = 'ABC Drive';
    // $mail->addAddress($mail->From);
    // $mail->Subject = $subject; 
    // $mail->MsgHTML($template2);
    // $mail->send();

    die('MF000');
} catch (phpmailerException $e) {
    die('MF254');
} catch (Exception $e) {
    die('MF255');
}





?>