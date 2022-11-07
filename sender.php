<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $email = $_POST['post'];

	$to = "denis.koblya@gmail.com"; // Email отримувача
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка"; // Тема листа



	
	
	
	$msg="
		Имя: $name /n
        Телефон: $phone /n		
		Почта: $email";
 	
	mail($to, $subject, $msg, "From: $from ");



?>
