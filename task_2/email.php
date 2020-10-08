<?php
$to = "zate@mail.ru";
$subject = "Тема сообщения";
$message = "";
$headers = "Content-type: text/html; charset=utf-8 \r\n";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(strip_tags($_POST["username"]));
    $tel = trim(strip_tags($_POST["tel"]));
    $mail = trim(strip_tags($_POST["mail"]));
    $adress = trim(strip_tags($_POST["adress"]));
    $comments = trim(strip_tags($_POST["comments"]));
    if (empty($name)) {
        die ("Поле 'ФИО' не заполнено!");
    }
    if (empty($tel)) {
        die ("Поле 'Мобильный телефон' не заполнено!");
    }

    if (strpos($mail,"@gmail.com") !== false) {
        die ("Регистрация пользователей с таким почтовым адресом невозможна");
    }
    $message  = "<html>";
    $message  .= "<body>";
    $message .= "Имя: " . $name;
    $message .= "<br />";
    $message .= "Телефон: " . $tel;
    $message .= "<br />";
    $message .= "Email: " . $mail;
    $message .= "<br />";
    $message .= "Адрес: " . $adress;
    $message .= "<br />";
    $message .= "Комментарий: " . $comments;
    $message .= "<br />";
    $message  .= "</body>";
    $message  .= "</html>";
    // Окончание формирования тела письма
    // Посылаем письмо
    mail($to, $subject, $message, $headers);
}
else
{
	exit;
} 
?>