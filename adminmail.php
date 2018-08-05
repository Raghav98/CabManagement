<?php
$servername = "localhost";
$username = "root";
$password = "";
$errors = array();
$num=$_POST['tid'];
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
$quer=mysqli_query($conn,"SELECT Email from admin_validation where Id='$num'");
$value=mysqli_fetch_object($quer);
$email=$value->Email;
//$res=mysqli_query($conn,"SELECT Name from admin_validation where Id='$num'");
if(!$quer)
{
	echo "Invalid Record";
}

	if(($_POST['admid'])=='1')
	{

        require 'PHPMailerAutoload.php';
        require 'credential1.php';
        require 'rand.php';
   		if(isset($_POST['sub']))
			{
				$mes="You can join as a driver to our cab service.The unique reference number is given below";
				$message="Message: " .$mes. "\n\n". "Reference_No: " .$driv_rand;
				$mail = new PHPMailer;

				$mail->SMTPDebug = 4;                               		// Enable verbose debug output

				$mail->isSMTP();                                      		// Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com:465';  						// Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               		// Enable SMTP authentication
				$mail->Username = EMAIL;                					 // SMTP username
				$mail->Password = PASS;                           			// SMTP password
				$mail->SMTPSecure = 'ssl';                            		// Enable TLS encryption, `ssl` also accepted
				$mail->Port = 465;                                    		// TCP port to connect to

				$mail->setFrom(EMAIL, 'Admin1');
				$mail->addAddress($email);     					// Add a recipient
																	//$mail->addAddress('ellen@example.com');               // Name is optional
				$mail->addReplyTo(EMAIL);
																			//$mail->addCC('cc@example.com');
																			//$mail->addBCC('bcc@example.com');
				
				
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
		    				echo '\n\nMessage has been sent\n\n';
						}
			}
	}


	else if(($_POST['admid'])=='2')
	{

        require 'PHPMailerAutoload.php';
        require 'credential1.php';
        require 'rand.php';
   		if(isset($_POST['sub']))
			{
				$mes= "You cannot join as a driver  but can lease your car to the cab service.We will make sure that your car maintenance is done frequenly and give adequate rent for the car monthly.The unique reference number is given below";
				$message="Message: " .$mes. "\n\n". "Reference_No: " .$crand;
				$mail = new PHPMailer;

				$mail->SMTPDebug = 4;                               		// Enable verbose debug output

				$mail->isSMTP();                                      		// Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com:465';  						// Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               		// Enable SMTP authentication
				$mail->Username = EMAIL;                					 // SMTP username
				$mail->Password = PASS;                           			// SMTP password
				$mail->SMTPSecure = 'ssl';                            		// Enable TLS encryption, `ssl` also accepted
				$mail->Port = 465;                                    		// TCP port to connect to

				$mail->setFrom(EMAIL, 'Admin1');
				$mail->addAddress($email);     					// Add a recipient
																	//$mail->addAddress('ellen@example.com');               // Name is optional
				$mail->addReplyTo(EMAIL);
																			//$mail->addCC('cc@example.com');
																			//$mail->addBCC('bcc@example.com');
				
				
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
		    				echo '\n\nMessage has been sent\n\n';
						}
			}
	}

	else if(($_POST['admid'])=='3')
	{

        require 'PHPMailerAutoload.php';
        require 'credential1.php';
        require 'rand.php';
   		if(isset($_POST['sub']))
			{
				$rand=mt_random();
				$crand=mt_random();
				$mes=  "You can join as a driver as well as work with your car at our cab service!!The unique reference number is given below";
				$message="Message: " .$mes. "\n\n". "Reference_No: " .$driv_rand. "\n\n" .$crand;
				$mail = new PHPMailer;

				$mail->SMTPDebug = 4;                               		// Enable verbose debug output

				$mail->isSMTP();                                      		// Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com:465';  						// Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               		// Enable SMTP authentication
				$mail->Username = EMAIL;                					 // SMTP username
				$mail->Password = PASS;                           			// SMTP password
				$mail->SMTPSecure = 'ssl';                            		// Enable TLS encryption, `ssl` also accepted
				$mail->Port = 465;                                    		// TCP port to connect to

				$mail->setFrom(EMAIL, 'Admin1');
				$mail->addAddress($email);     					// Add a recipient
																	//$mail->addAddress('ellen@example.com');               // Name is optional
				$mail->addReplyTo(EMAIL);
																			//$mail->addCC('cc@example.com');
																			//$mail->addBCC('bcc@example.com');
				
				
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
		    				echo '\n\nMessage has been sent\n\n';
						}
			}
	}

	else if(($_POST['admid'])=='4')
	{

        require 'PHPMailerAutoload.php';
        require 'credential1.php';
   		if(isset($_POST['sub']))
			{
				$mes=  "Sorry We have enough drivers and cars at our cab service.Please get back to us later";
				$message="Message: " .$mes;
				$mail = new PHPMailer;

				$mail->SMTPDebug = 4;                               		// Enable verbose debug output

				$mail->isSMTP();                                      		// Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com:465';  						// Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               		// Enable SMTP authentication
				$mail->Username = EMAIL;                					 // SMTP username
				$mail->Password = PASS;                           			// SMTP password
				$mail->SMTPSecure = 'ssl';                            		// Enable TLS encryption, `ssl` also accepted
				$mail->Port = 465;                                    		// TCP port to connect to

				$mail->setFrom(EMAIL, 'Admin1');
				$mail->addAddress($email);     					// Add a recipient
																	//$mail->addAddress('ellen@example.com');               // Name is optional
				$mail->addReplyTo(EMAIL);
																			//$mail->addCC('cc@example.com');
																			//$mail->addBCC('bcc@example.com');
				
				
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
		    				echo '\n\nMessage has been sent\n\n';
						}
			}
	}
	else
	{
		echo "Invalid Mail Transfer_Id";
	}	
?>