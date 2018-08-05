<?php
$servername = "localhost";
$username = "root";
$password = "";
$errors = array();
session_start();
$_SESSION['userName'] = 'Root';
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
if(!mysqli_select_db($conn,'cabproject'))
{
	echo "Database Not Selected";
}
$radio=$_POST['type'];
$email=$_POST['email'];
$pass=$_POST['pw'];
 if($radio == 'cust')
{		
  $user_check_query = "SELECT * FROM users WHERE Email_id='$email' OR Create_pass='$pass' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
   if ($user) { // if user exists
				if((($user['Email_id']==$email) &&($user['Create_pass']==$pass)))
				{   $_SESSION['User_id']=$user['User_id'];
			         $_POST['usernam']=$_SESSION['User_id'];
					echo('Login successful');
				header('refresh:1; url=home.html');
				}
	if((($user['Email_id']!=$email) ||($user['Create_pass']!=$pass)))
				{
					echo("Email or password is incorrect");
				}	
			 }		
	else   {
		echo("Email or password doesn't even exist ");
		header('refresh:2;url=sigin.html');
		   }
}
if($radio == 'driv')
{		
  $user_check_query = "SELECT * FROM drivers WHERE Driv_mail='$email' OR Create_pass='$pass' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
   if ($user) {	   // if user exists
				if((($user['Driv_mail']==$email) &&($user['Create_pass']==$pass)))
					{	  $_SESSION['Driv_id']=$user['Driv_id'];
						echo('Login successful');
						header('refresh:1; url=driver.php');
					}
				if((($user['Driv_mail']!=$email) ||($user['Create_pass']!=$pass)))
					{
					echo("Email or password is incorrect");
					}	
              }	
		else	{
				echo("Email or password doesn't even exist ");
				header('refresh:2;url=sigin.html');
				}		 
	}
	if($radio == 'admin')
{		
  $user_check_query = "SELECT * FROM admin WHERE Email='$email' OR Password='$pass' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
   if ($user) {	   // if user exists
				if((($user['Email']==$email) &&($user['Create_pass']==$pass)))
					{	  $_SESSION['Driv_id']=$user['Driv_id'];
						echo('Login successful');
						header('refresh:1; url=driver.php');
					}
				if((($user['Driv_mail']!=$email) ||($user['Create_pass']!=$pass)))
					{
					echo("Email or password is incorrect");
					}	
              }	
		else	{
				echo("Email or password doesn't even exist ");
				header('refresh:2;url=sigin.html');
				}		 
	}
?>	