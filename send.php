

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
     $questone = $_POST['questone']
   //   $questtwo = $_POST['questtwo']

    if(!empty($_POST['questone'])){
       $torgestvo = "торжество"
    }
    else{
      echo 'no'
    }
   //  if(!empty($_POST['questtwo'])){
   //          $vecher = "вечеринку"
   //   }

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
    Планирует прибыть на ".$questone.",  а также на ".$vecher.".";

 mail($to, $subject, $message, $headers);

 ?>