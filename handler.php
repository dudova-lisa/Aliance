<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);
$modal_user_name = htmlspecialchars($_POST["username"]);
$modal_user_phone = htmlspecialchars($_POST["userphone"]);



$token = "7090081960:AAHdQreoDhsftYjAbOhM6FjXAn5VRASMPuQ";
$chat_id = "-4102014428";

$formData = array(
  "Клиент: " => $user_name, 
  "Телефон: " => $user_phone,
  "Клиент: " => $modal_user_name, 
  "Телефон: " => $modal_user_phone,
  
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}

