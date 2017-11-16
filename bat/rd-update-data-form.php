<?php

$recipients = 'webdataedit@abcdrive.info';
//$recipients = 'alexandre.retif@bramston.co';
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

    $template = file_get_contents('rd-update-data.txt');
    //$template2 = file_get_contents('rd-registration.tpl');

    if (isset($_POST['form-type'])) {
        switch ($_POST['form-type']){
            case 'update-data':
                $subject = 'ABC Drive Registration Edit';
                break;
            default:
                $subject = 'ABC Drive Registration Edit';
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

    if (isset($_POST['memberemail'])) {
        $template = str_replace(
            array("<!-- #{memberemail} -->"),
            array($_POST['memberemail']),
            $template);
    }

    if (isset($_POST['mobilephone'])) {
        $template = str_replace(
            array("<!-- #{mobilephone} -->"),
            array($_POST['mobilephone']),
            $template);
    }

    if (isset($_POST['homephone'])) {
        $template = str_replace(
            array("<!-- #{homephone} -->"),
            array($_POST['homephone']),
            $template);
    }

    if (isset($_POST['address'])) {
        $template = str_replace(
            array("<!-- #{address} -->"),
            array($_POST['address']),
            $template);
    }

    if (isset($_POST['address2'])) {
        $template = str_replace(
            array("<!-- #{address2} -->"),
            array($_POST['address2']),
            $template);
    }

    if (isset($_POST['area'])) {
        $template = str_replace(
            array("<!-- #{area} -->"),
            array($_POST['area']),
            $template);
    }

    if (isset($_POST['menucity'])) {
        $template = str_replace(
            array("<!-- #{menucity} -->"),
            array($_POST['menucity']),
            $template);
    }

    if (isset($_POST['profession'])) {
        $template = str_replace(
            array("<!-- #{profession} -->"),
            array($_POST['profession']),
            $template);
    }

    if (isset($_POST['companyname'])) {
        $template = str_replace(
            array("<!-- #{companyname} -->"),
            array($_POST['companyname']),
            $template);
    }

    if (isset($_POST['industry'])) {
        $template = str_replace(
            array("<!-- #{industry} -->"),
            array($_POST['industry']),
            $template);
    }

    if (isset($_POST['officephone'])) {
        $template = str_replace(
            array("<!-- #{officephone} -->"),
            array($_POST['officephone']),
            $template);
    }

    if (isset($_POST['brand1'])) {
        $template = str_replace(
            array("<!-- #{brand1} -->"),
            array($_POST['brand1']),
            $template);
    }

    if (isset($_POST['model1'])) {
        $template = str_replace(
            array("<!-- #{model1} -->"),
            array($_POST['model1']),
            $template);
    }

    if (isset($_POST['plate1'])) {
        $template = str_replace(
            array("<!-- #{plate1} -->"),
            array($_POST['plate1']),
            $template);
    }

    if (isset($_POST['carownertype1'])) {
        $template = str_replace(
            array("<!-- #{carownertype1} -->"),
            array($_POST['carownertype1']),
            $template);
    }

        if (isset($_POST['brand2'])) {
        $template = str_replace(
            array("<!-- #{brand2} -->"),
            array($_POST['brand2']),
            $template);
    }

    if (isset($_POST['model2'])) {
        $template = str_replace(
            array("<!-- #{model2} -->"),
            array($_POST['model2']),
            $template);
    }

    if (isset($_POST['plate2'])) {
        $template = str_replace(
            array("<!-- #{plate2} -->"),
            array($_POST['plate2']),
            $template);
    }

    if (isset($_POST['carownertype2'])) {
        $template = str_replace(
            array("<!-- #{carownertype2} -->"),
            array($_POST['carownertype2']),
            $template);
    }

    if (isset($_POST['maritalstatus'])) {
        $template = str_replace(
            array("<!-- #{maritalstatus} -->"),
            array($_POST['maritalstatus']),
            $template);
    }

    if (isset($_POST['spousetitle'])) {
        $template = str_replace(
            array("<!-- #{spousetitle} -->"),
            array($_POST['spousetitle']),
            $template);
    }

    if (isset($_POST['spousefirstname'])) {
        $template = str_replace(
            array("<!-- #{spousefirstname} -->"),
            array($_POST['spousefirstname']),
            $template);
    }

    if (isset($_POST['spousename'])) {
        $template = str_replace(
            array("<!-- #{spousename} -->"),
            array($_POST['spousename']),
            $template);
    }


    // if (isset($_POST['numkid'])) {
    //     $template = str_replace(
    //         array("<!-- #{numkid} -->"),
    //         array($_POST['numkid']),
    //         $template);
    // }

    // if (isset($_POST['FirstNameKid1'])) {
    //     $template = str_replace(
    //         array("<!-- #{FirstNameKid1} -->"),
    //         array($_POST['FirstNameKid1']),
    //         $template);
    // }

    // if (isset($_POST['GenderKid1'])) {
    //     $template = str_replace(
    //         array("<!-- #{GenderKid1} -->"),
    //         array($_POST['GenderKid1']),
    //         $template);
    // }

    // if (isset($_POST['menubdaydayKid1'])) {
    //     $template = str_replace(
    //         array("<!-- #{menubdaydayKid1} -->"),
    //         array($_POST['menubdaydayKid1']),
    //         $template);
    // }

    // if (isset($_POST['menubdaymonthKid1'])) {
    //     $template = str_replace(
    //         array("<!-- #{menubdaymonthKid1} -->"),
    //         array($_POST['menubdaymonthKid1']),
    //         $template);
    // }

    // if (isset($_POST['menubdayyearKid1'])) {
    //     $template = str_replace(
    //         array("<!-- #{menubdayyearKid1} -->"),
    //         array($_POST['menubdayyearKid1']),
    //         $template);
    // }

    // if (isset($_POST['FirstNameKid2'])) {
    //     $template = str_replace(
    //         array("<!-- #{FirstNameKid2} -->"),
    //         array($_POST['FirstNameKid2']),
    //         $template);
    // }

    // if (isset($_POST['GenderKid2'])) {
    //     $template = str_replace(
    //         array("<!-- #{GenderKid2} -->"),
    //         array($_POST['GenderKid2']),
    //         $template);
    // }

    // if (isset($_POST['menubdaydayKid2'])) {
    //     $template = str_replace(
    //         array("<!-- #{menubdaydayKid2} -->"),
    //         array($_POST['menubdaydayKid2']),
    //         $template);
    // }

    // if (isset($_POST['menubdaymonthKid2'])) {
    //     $template = str_replace(
    //         array("<!-- #{menubdaymonthKid2} -->"),
    //         array($_POST['menubdaymonthKid2']),
    //         $template);
    // }

    // if (isset($_POST['menubdayyearKid2'])) {
    //     $template = str_replace(
    //         array("<!-- #{menubdayyearKid2} -->"),
    //         array($_POST['menubdayyearKid2']),
    //         $template);
    // }

    // if (isset($_POST['FirstNameKid3'])) {
    //     $template = str_replace(
    //         array("<!-- #{FirstNameKid3} -->"),
    //         array($_POST['FirstNameKid3']),
    //         $template);
    // }

    // if (isset($_POST['GenderKid3'])) {
    //     $template = str_replace(
    //         array("<!-- #{GenderKid3} -->"),
    //         array($_POST['GenderKid3']),
    //         $template);
    // }

    // if (isset($_POST['menubdaydayKid3'])) {
    //     $template = str_replace(
    //         array("<!-- #{menubdaydayKid3} -->"),
    //         array($_POST['menubdaydayKid3']),
    //         $template);
    // }

    // if (isset($_POST['menubdaymonthKid3'])) {
    //     $template = str_replace(
    //         array("<!-- #{menubdaymonthKid3} -->"),
    //         array($_POST['menubdaymonthKid3']),
    //         $template);
    // }

    // if (isset($_POST['menubdayyearKid3'])) {
    //     $template = str_replace(
    //         array("<!-- #{menubdayyearKid3} -->"),
    //         array($_POST['menubdayyearKid3']),
    //         $template);
    // }

    // if (isset($_POST['FirstNameKid4'])) {
    //     $template = str_replace(
    //         array("<!-- #{FirstNameKid4} -->"),
    //         array($_POST['FirstNameKid4']),
    //         $template);
    // }

    // if (isset($_POST['GenderKid4'])) {
    //     $template = str_replace(
    //         array("<!-- #{GenderKid4} -->"),
    //         array($_POST['GenderKid4']),
    //         $template);
    // }

    // if (isset($_POST['menubdaydayKid4'])) {
    //     $template = str_replace(
    //         array("<!-- #{menubdaydayKid4} -->"),
    //         array($_POST['menubdaydayKid4']),
    //         $template);
    // }

    // if (isset($_POST['menubdaymonthKid4'])) {
    //     $template = str_replace(
    //         array("<!-- #{menubdaymonthKid4} -->"),
    //         array($_POST['menubdaymonthKid4']),
    //         $template);
    // }

    // if (isset($_POST['menubdayyearKid4'])) {
    //     $template = str_replace(
    //         array("<!-- #{menubdayyearKid4} -->"),
    //         array($_POST['menubdayyearKid4']),
    //         $template);
    // }

    if (isset($_POST['lng'])) {
        $template = str_replace(
            array("<!-- #{lng} -->"),
            array($_POST['lng']),
            $template);
    }

    if (isset($_POST['quiz'])) {
        $template = str_replace(
            array("<!-- #{quiz} -->"),
            array($_POST['quiz']),
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
    $mail->From = 'webdataedit@abcdrive.info';

    if (isset($_POST['name'])){
        $mail->FromName = $_POST['name'];
    }else{
        $mail->FromName = "";
    }

    foreach ($addresses[0] as $key => $value) {
        $mail->addAddress($value[0]);
    }

    $mail->CharSet = "text/plain; charset=UTF-8;";
    $mail->setFrom($mail->From);
    $mail->Subject = $subject; 
    $mail->Body = $template;
    $mail->send();

    // $mail = new PHPMailer();
    // $mail->From = 'info@abcdrive.info';

    // $mail->CharSet = "text/html; charset=UTF-8;";
    // $mail->setFrom($mail->From);
    // $mail->FromName = 'ABC Drive';
    // $mail->addAddress($_POST['memberemail']);
    // $mail->Subject = $subject; 
    // $mail->MsgHTML($template2);
    // $mail->send();

    die('MF000');
} catch (phpmailerException $e) {
    die('MF254');
} catch (Exception $e) {
    die('MF255');
}