<?php
$post = (!empty($_POST)) ? true : false;
if($post)
{
$name = htmlspecialchars($_POST["feedback_name"]);
$tel = htmlspecialchars($_POST["feedback_tel"]);
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
$subject ="Заказ на звонок!";
$messager ="Имя: " .$name."\n\nТелефон: ".$tel."\n\n";
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