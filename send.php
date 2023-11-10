

<?php

session_start();
echo 'yes';
 

$to = 'raskovaloves@gmail.com';
$subject = 'Приглашение на свадьбу"';
$headers = 'From: info@0blick.ru' . "\r\n" .
'Reply-To: admin@sovhospital.ru' . "\r\n" .
'X-Mailer: PHP/' . phpversion().
'Content-Type: text/html; charset=utf-8';

     $name = $_POST['name'];
     $secondname = $_POST['secondname'];

    if(!empty($_POST['1quest'])){
       $torgestvo = 'торжество'
    }
    if(!empty($_POST['2quest'])){
            $vecher = 'вечеринку'
     }

     $name = htmlspecialchars($name);
     $secondname = htmlspecialchars($secondname);
  
     $name = urldecode($name);
     $secondname = urldecode($secondname);
     
     
     $name = trim($name);
     $secondname = trim($secondname);
     

     $message =  
 "Добрый день, Юлия и Евгений!
 Поступил запрос на участие в мероприятии 30 декабря 2023 года.
    Заявитель: ".$name." ".$secondname.".
    Планирует прибыть на ".$torgestvo.",  а также на ".$vecher.".
 ;

 mail($to, $subject, $message, $headers);

 ?>