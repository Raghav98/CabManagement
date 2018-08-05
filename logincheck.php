<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
if(!mysqli_select_db($conn,'cabproject'))
{
	echo"Database Not Selected";
}	
$email=$_POST['Email'];
$pass=$_POST['pw'];
$user_check_query = "SELECT * FROM customers WHERE Email_id='$email'  OR Create_pass='$pass' LIMIT 1";
$result = mysqli_query($conn, $user_check_query);
 $user = mysqli_fetch_assoc($result);
 if($user)
 { //user exists
		if ((($user['Email_id'] === $email)&&($user['Create_pass']=== ($pass))))
			{
			echo "\n login successful";
			header("refresh:1; url=home.html");  
			}
		if((($user['Email_id'] !== $email)||($user['Create_pass'] !== ($pass))))
			{
			echo "\n email or password is incorrect";
			header("refresh:1; url=login.html");
			}
 }
else
{
echo "\n user doesn't even exist";
header("refresh:1; url=login.html");
}	
 ?>