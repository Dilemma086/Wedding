<?php
//     $to = 'lyu.stn@yandex.ru';
//     // $to = 'dilemma086@yandex.ru';
//     // $to = 'call-centr@sovhospital.ru';
//     // $to = 'raskovaloves@gmail.com';
//     // $to = 'shad.anastasiya@gmail.com';
//     $subject = 'Поздравление любимого доктора';
//     $headers = 'From: info@совбольница.рф' . "\r\n" .
//     'Reply-To: info@совбольница.рф' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();
    
//     $user = $_POST['user'];
//     $user_doc = $_POST['user_doc'];
//     $text = $_POST['text'];
 	 
// 	$message = "
// 	Ф.И.О. отправителя: ".$user."<br>
// 	Ф.И.О. доктора : ".$user_doc."<br>
// 	Поздравление: ".$text."<br>
// ";
//     mail($to, $subject, $message, $headers)
$name = $_POST['name'];
    echo $name; // Результат: "Значение переменной"
?>