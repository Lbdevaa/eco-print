<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['phone']; 
$email = $_POST['email']; 
$nameForm = $_POST['nameForm'];
// $description = $_POST['description'];
// $amount = $_POST['amount'];
// $interest = $_POST['interest'];
// $comment = $_POST['comment'];

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@invite-practice.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = ''; // Ваш пароль от почты с которой будут отправляться письма  
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('info@invite-practice.ru'); // от кого будет уходить письмо?  
$mail->addAddress('info@invite-practice.ru');     // Кому будет уходить письмо   
$mail->isHTML(true);                                  // Set email format to HTML
   

$mail->Body    = '<b>Имя:</b> ' . $name .  '<br><b>Телефон:</b> ' . $phone . '<br> Форма заявки: ' . $nameForm .'<br>Способ оплаты:</br> ' . $description . '<br>Стоимость: </br> ' . $amount . '<br><b>Email:</b> ' . $email .'<br>Интересует: </br>' . $interest  . '<br>Комментарий: </br>' . $comment;
$mail->Subject = 'Заявка с сайта ';
$mail->AltBody = '';
$mail->send();
?>
 
 
