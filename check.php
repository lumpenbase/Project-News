<?php
//Проверка и отправка сообщения раздел - Контакты -
//print_r($_POST);
$email = $_POST['email'];
$message = $_POST['message'];
$error = '';

if (trim($email) == '') {
   $error = 'Введите ваш Email';
} else if (trim($message) == '') {
   $error = 'Введите ваше сообщение';
} else if (strlen(trim($message)) < 10) {
   $error = 'Cообщение должно быть больше 10 символов';
}

if ($error != '') {
   echo $error;
   exit;
}

// Заголовок сообщения в почте
$subject = "=?utf-8?B?" . base64_encode("Тестовое сообщение") . "?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
$my_post = "bohdan.martynov1@nure.ua";

if (mail($my_post, $subject, $message, $headers)) {
   header("Location: about.php");
   exit;
} else {
   echo "Ошибка при отправке сообщения.";
}
