<?php
        require 'PHPMailerAutoload.php';
        require 'credential.php';
   if(isset($_POST['sendemail']))
	{
		$first_name = $_POST['firstname'];
		$phone = $_POST['phonenum'];
		$email = $_POST['email'];
		$carno = $_POST['carno'];
		$city = $_POST['city'];
		$radio=$_POST['od'];
		$ins=$_POST['insurance'];
		$tex=$_POST['textmes'];
		$subject='Form Submission';
		$message="Name: " .$first_name."\n\n"."Phone: " .$phone."\n\n"."Email: " .$email."\n\n"."Carno: " .$carno."\n\n"."City: " .$city."\n\n"."Val: " .$radio."\n\n". "Insurance Validation: " .$ins. "\n\n". "Message :" .$tex;
		$mail = new PHPMailer;
       
       $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

		$mail->SMTPDebug = 4;                               		// Enable verbose debug output

		$mail->isSMTP();                                      		// Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com:465';  						// Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               		// Enable SMTP authentication
		$mail->Username = EMAIL;                					 // SMTP username
		$mail->Password = PASS;                           			// SMTP password
		$mail->SMTPSecure = 'ssl';                            		// Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    		// TCP port to connect to

		$mail->setFrom(EMAIL, 'Tutor');
		$mail->addAddress($_POST['email']);     					// Add a recipient
															//$mail->addAddress('ellen@example.com');               // Name is optional
		$mail->addReplyTo(EMAIL);
																	//$mail->addCC('cc@example.com');
																	//$mail->addBCC('bcc@example.com');
		//print_r($_FILES['file']);exit;
		for($i=0; $i<count($_FILES['file']['tmp_name']); $i++)
		{
			$mail->addAttachment($_FILES['file']['tmp_name'][$i],$_FILES['file']['name'][$i]);
		}
		
																		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
																		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);	                               		  	// Set email format to HTML

																		//$mail->Subject = 'Here is the subject';
		$mail->Body    = $message;										
																	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if(!$mail->send())
	 			{
    				echo 'Message could not be sent.\n\n';
    				echo 'Mailer Error: ' . $mail->ErrorInfo;
				}	 
			else 
				{
    				echo 'Message has been sent';
				}

	}




$servername = "localhost";
$username = "root";
$password = "";
$errors = array();
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("\n\nConnection failed: " . $conn->connect_error);
} 
echo "\n\nConnected successfully";
if(!mysqli_select_db($conn,'cabproject'))
{
	echo "Database Not Selected";
}
$quer="INSERT INTO admin_validate(Name,car_num,Email) VALUES ('$first_name','$carno','$email');";
if(!mysqli_query($conn,$quer))
{
die("Error in inserting record");
}		
else
{
	echo"Data Inserted";
	header("refresh:25; url=admin_test.html");
}
?>