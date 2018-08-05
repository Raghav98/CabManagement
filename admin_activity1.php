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
	$cid=$_POST['carid'];
	$ctyp=$_POST['cartype'];
	$quer=mysqli_query($conn,"INSERT INTO cars(Car_name,Car_Numb) VALUES('$ctyp','$cid');");
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