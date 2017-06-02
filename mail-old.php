<?php

if(isset($_FILES['inputFile']) and !empty($_FILES['inputFile'])) {
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
} else {
    $uploadfile = "Файл не загрузили";
}

//echo 'Некоторая отладочная информация:';
//print_r($_FILES);

$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
$headers .= "From: ".$_SERVER['SERVER_NAME']."\r\n";
$result = mail('MAIL@PROSPEKT-PRINT.RU','Письмо по сайту canpi.ru от ' . $_POST['telephone'],$_POST['name'] . '<br><br>' . $_POST['telephone'] . '<br><br>' . 'Ссылка на файл $uploadfile' . '<br><br>' . $_POST['comment'] ,$headers);
//$result = mail('hoffman.ozr@gmail.com','Письмо по сайту canpi.ru от ' . $_POST['telephone'],$_POST['name'] . '<br><br>' . $_POST['telephone'] . '<br><br>' . 'Ссылка на файл $uploadfile' . '<br><br>' . $_POST['comment'] ,$headers);
if($result) {
    echo "Письмо успешно отправлено";
} else {
    echo "Письмо не отправлено. Ошибка: " . $result;
}
?>