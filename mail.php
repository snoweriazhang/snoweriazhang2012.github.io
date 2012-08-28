<?php

	$to = "dobbyzhang@gmail.com";
	$subject = "Message from ".$_POST["subject"];
	$body = "The following message was submitted via snoweria.com:\n\n" .
	"Name:"." ".$_POST["subject"] . "\n" .
	"Email:"." ".$_POST["mail"] . "\n" .
	"Message:"." ".$_POST["text"]."\n";
	$headers = "From: Snoweria.com\r\n";
	mail($to, $subject, $body, $headers);

	echo "Thanks ".$_POST["subject"].". Your message has been sent."

?>