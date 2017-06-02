<?php header('Content-Type: text/html; charset=utf-8'); 


function sendEmail($to, $subject, $body_html, $from, $fromname) {
    
    $url = 'https://api.sendgrid.com/';

    $params = array(
        'api_user' => 'defool',
        'api_key' => '160688nbveh',
        'to' => $to,
        'subject' => $subject,
        'html' => $body_html,
        'from' => $from,
        'fromname' => $fromname
    );

    $request = $url . 'api/mail.send.json';

    $session = curl_init($request);
    curl_setopt($session, CURLOPT_POST, true);
    curl_setopt($session, CURLOPT_POSTFIELDS, $params);
    curl_setopt($session, CURLOPT_HEADER, false);
    curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($session);
    curl_close($session);

    $response = json_decode($response, true);

    if ($response['message'] == 'success') {
        return true;
    } else {
        return false;
    }
}



?>

<?php 
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['telephone'])) {$telefon = $_POST['telephone'];}
if (isset($_POST['comment'])) {$comment = $_POST['comment'];}
if (isset($_FILES['inputFile']) and !empty($_FILES['inputFile'])) {
    $blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm");
    foreach ($blacklist as $item)
        if(preg_match("/$item\$/i", $_FILES['inputFile']['name'])) exit;
    $type = $_FILES['inputFile']['type'];
    $size = $_FILES['inputFile']['size'];
    if ($size > 20240000) exit;
    $uploaddir = '/srv/users/serverpilot/apps/canpi/public/uploads/';
    $uploadfile = $uploaddir . $_FILES['inputFile']['name'];
    $fileName = $_FILES['inputFile']['name'];
    if(move_uploaded_file($_FILES['inputFile']['tmp_name'], $uploadfile)) {
        echo "Файл корректен и был успешно загружен.\n";
    }
    else {
        echo "Ошибка при загрузке файла.\n";
        print_r ($_FILES);
    }
} else {
    $uploadfile = "Файл не загрузили";
}



$url_ms = "info@canpi.ru";
$to = "hoffman.ozr@gmail.com";
//$to = "MAIL@PROSPEKT-PRINT.RU";
$subject = "Письмо по сайту canpi.ru. Свяжитесь с клиентом";
$message = "
С уважением: ".$name."
<br><br>Мой контактный телефон: ".$telefon."
<br><br>Ссылка на файл: ".$uploadfile."";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ' . $_SERVER['SERVER_NAME'] . ' <' . NOREPLYMAIL . '>' . "\r\n";

if (sendEmail($to, $subject, $message, $url_ms , $subject)) {
    echo "Письмо успешно отправлено";
} else {
    echo "Письмо не отправлено. Ошибка: " . $result;
}

?>
