<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
XXXXXXXXXXXXXXXXXXXXXXX - токен бота*/

$name = $_POST['user_name'];
$email = $_POST['user_email'];


$token = "5428210587:AAHPtWmbxD2WAlMe56zXCryAaHljiSJ6agQ";
$chat_id = "-613203752";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email: ' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
  
} else {
  echo "Error";
}

?>