<?php 
$name = trim($_POST['name']); 
$phone = trim($_POST['phone']); 
$email = trim($_POST['email']); 
$message = trim($_POST['message']); 
$fromMail = 'info@yessenzhulova.kz'; //Почта отправителя (в домене почты должен быть адрес вашего сайта)
$fromName = 'Поступила заявка на консультацию с сайта'; //Заголовок письма
$emailTo = 'k.yessenzhulova@mail.ru'; //Ваша почта
$subject = 'Поступила заявка на консультацию с yessenzhulova.kz'; 
$subject = '=?utf-8?b?'. base64_encode($subject) .'?='; 
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n"; 
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n"; 

// Содержимое письма 
$body = "Получено письмо с сайта yessenzhulova.kz \nИмя: $name\nТелефон: $phone\nПочта: $email\nCообщение: $message"; 

// сообщение будет отправлено в случае, если поле с номером телефона не пустое 
if (strlen($phone) > 0) { 
$mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail ); 
return;
} 

?>