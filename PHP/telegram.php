<?php

/* https://api.telegram.org/bot6146065059:AAEP5qTVlLRzUsH407L0KtMUYP_k-TNUls4/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "6146065059:AAEP5qTVlLRzUsH407L0KtMUYP_k-TNUls4";
$chat_id = "-704044806";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ..\thank-you.html');  
} else {
    echo "Error";
}
?>