<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    var_dump($name, $email, $subject, $message);
    $message = wordwrap($message, 70, "\r\n");
    mail($email, $subject, $message);
}

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require '../PHPMailer/src/Exception.php';
// require '../PHPMailer/src/PHPMailer.php';
// require '../PHPMailer/src/SMTP.php';

// // Переменные, которые отправляет пользователь
// $name = $_POST['name'];
// $email = $_POST['email'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];

// $mail = new PHPMailer(true);
// $mail->SMTPDebug = 2;
// try {
//     //Server settings
//     // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
//     $mail->isSMTP();                                            // Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//     $mail->Username   = 'a0993715642@gmail.com';                     // SMTP username
//     $mail->Password   = '12091995';                               // SMTP password
//     $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//     $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//     //Recipients
//     $mail->setFrom('a0993715642@gmail.com', 'Mailer');
//     $mail->addAddress($email, 'Joe User');     // Add a recipient
//     // $mail->addAddress('ellen@example.com');               // Name is optional
//     // $mail->addReplyTo($email, 'Information');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     // // Attachments
//     // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Here is the subject';
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }
// $mail = new PHPMailer\PHPMailer\PHPMailer();
// $mail->SMTPDebug = 2;
// try {
//     $msg = "ok";
//     $mail->isSMTP(true);   
//     $mail->CharSet = "UTF-8";                                          
//     $mail->SMTPAuth   = true;

//     // Настройки вашей почты
//     $mail->Host       = 'ssl://smtp.gmail.com'; // SMTP сервера GMAIL
//     $mail->Username   = 'a0993715642@gmail.com'; // Логин на почте
//     $mail->Password   = '12091995'; // Пароль на почте
//     $mail->SMTPSecure = 'ssl';
//     $mail->Port       = 465;
//     $mail->setFrom('a0993715642@gmail.com', 'Aleksandra'); // Адрес самой почты и имя отправителя
  
//     // Получатель письма
//     $mail->addAddress('xafipas729@coalamails.com');  
//     // $mail->addAddress('youremail@gmail.com'); // Ещё один, если нужен

//     // Прикрипление файлов к письму
// // if (!empty($_FILES['myfile']['name'][0])) {
// //     for ($ct = 0; $ct < count($_FILES['myfile']['tmp_name']); $ct++) {
// //         $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['myfile']['name'][$ct]));
// //         $filename = $_FILES['myfile']['name'][$ct];
// //         if (move_uploaded_file($_FILES['myfile']['tmp_name'][$ct], $uploadfile)) {
// //             $mail->addAttachment($uploadfile, $filename);
// //         } else {
// //             $msg .= 'Неудалось прикрепить файл ' . $uploadfile;
// //         }
// //     }   
// // }

//         // -----------------------
//         // Само письмо
//         // -----------------------
//         $mail->isHTML(true);
    
//         $mail->Subject = $subject;
//         $mail->Body    = "<b>Имя:</b> $name <br>
//         <b>Почта:</b> $email<br><br>
//         <b>Сообщение:</b><br>$message";


// // Проверяем отравленность сообщения
// if ($mail->send()) {
//     echo "$msg";
// } else {
// echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
// }

// } catch (Exception $e) {
//     echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
// }