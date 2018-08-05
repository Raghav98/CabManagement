<?php
//require '/home/newnplhftp/nplh.us/smtp/phpmailer/class.phpmailer.php';

//require 'PHPMailerAutoload.php';
if(isset($_POST['sendemail']))
{
	$first_name = $_POST['firstname'];
	$phone = $_POST['phonenum'];
	$email = $_POST['email'];
	$carno = $_POST['carno'];
	$city = $_POST['city'];
	$to='adm.bos001@gmail.com';
	$subject='Form Submission';
	$message="Name: " .$first_name."\n"."Phone: " .$phone."\n"."Email: " .$email."\n"."Carno: " .$carno."\n"."City: " .$city;
	$headers="From: ".$email;
	if(mail($to,$subject,$message,$headers))
		{
			echo "<h1> Sent Successfully!!Thank you"." ".$first_name.",We will contact you shortly!! </h1>";
		}
	else
		{
			echo"Something Went Wrong";
		}
}
?>				