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
	$id=$_POST['id'];
	$quer=mysqli_query($conn,"DELETE FROM  cars where Car_id='$id';");
	if(!$quer)
		{
			die("Error in deleting record");
		}
	else
		{
			echo "Data deleted from the table";
		}
	header("refresh:5; url=admin_test.html");
?>