<?php
$servername = "localhost";
$username = "root";
$password = "";
$errors = array();
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
	$dnam=$_POST['name'];
	$dph=$_POST['phno'];
	$em=$_POST['email'];
	$ad=$_POST['add'];
	$quer=mysqli_query($conn,"INSERT INTO drivers(Driv_name,Ph_no,Driv_mail,Address) VALUES('$dnam','$dph','$em','$ad');");
	if(!$quer)
		{
			die("Error in inserting record");
		}
	else
		{
			echo "Data inserted in the database";
		}
	header("refresh:5; url=admin_test.html");
?>