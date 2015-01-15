<?php
$post = (!empty($_POST)) ? true : false;
if($post)
{
$email = htmlspecialchars($_POST["email"]);
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["tel"]);
$error = "";
if(!$name)
{
$error .= "Пожалуйста введите ваше имя.<br />";
}
function ValidateName($value)
{
$regex =  "^[а-яА-ЯёЁa-zA-Z0-9]+$";
if($value == "") {
return false;
} else {
$string = preg_replace($regex, "", $value);
}
return empty($string) ? true : false;
}
function ValidateEmail($valueEmail)
{
	$regexEmail = "/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/";
	if($valueEmail == "") {
	return false;
	} else {
	$string = preg_replace($regexEmail, "", $valueEmail);
	}
	return empty($string) ? true : false;
}
	if(!$email)
	{
	$error .= "Пожалуйста введите E-mail.<br />";
	}
	if($email && !ValidateEmail($email))
	{
	$error .= "Введите корректный E-mail.<br />";
	}
// Check tel
function ValidateTel($valueTel)
{
$regexTel = "/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/";
if($valueTel == "") {
return false;
} else {
$string = preg_replace($regexTel, "", $valueTel);
}
return empty($string) ? true : false;
}
if(!$tel)
{
$error .= "Пожалуйста введите телефон.<br />";
}
if($tel && !ValidateTel($tel))
{
$error .= "Введите корректный телефон.<br />";
}
if(!$error)
{
$subject ="Новый заказ!";
$messager ="Имя: " .$name."\n\nE-mail:".$email."\n\nТелефон: ".$tel."\n\n";
$mail = mail("bolidedesign777@gmail.com", $subject, $messager);
if($mail)
{
echo 'OK';
}
}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}
}
?>