<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];
	 
	$EmailTo = "asepsetyawan9@test.com";
	$Subject = "Web 1 - Kontak Form";
	 
	// data yang akan dikirim ke email
	$Body .= "Name: ";
	$Body .= $name;
	$Body .= "\n";
	 
	$Body .= "Email: ";
	$Body .= $email;
	$Body .= "\n";

	$Body .= "Gender: ";
	$Body .= $gender;
	$Body .= "\n";

	$Body .= "Phone: ";
	$Body .= $phone;
	$Body .= "\n";
	 
	$Body .= "Message: ";
	$Body .= $message;
	$Body .= "\n";
	 
	// send email
	$success = mail($EmailTo, $Subject, $Body, "From:".$email);
	 
	// kasih response dari pengiriman email
	if ($success){
	   echo "success";
	}else{
	    echo "invalid";
	}
 
?>