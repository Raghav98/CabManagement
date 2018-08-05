<?php
session_start(); 
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
$source=$_SESSION['sourc'];
$destination=$_SESSION['dest'];
$distance=$_SESSION['dis'];
$duration=$_SESSION['dur'];
$cost=$_SESSION['cost'];
$uid=$_SESSION['User_id'];
$did=$_SESSION['Driv_id'];
$cid=$_SESSION['car'];
$query="INSERT INTO userhistory(User_id,Driv_id,Source,destination,distance,duration,price,Date,car_nam) VALUES ('$uid','$did','$source','$destination','$distance','$duration','$cost',NOW(),'$cid');";
if(!mysqli_query($conn,$query))
{
	die("Error in inserting Records");
}
else
{
	echo"Data Inserted";	
}	
$sql="SELECT max(historyno) as Maxval from userhistory";
$result=(mysqli_query($conn,$sql));
$value=mysqli_fetch_object($result);
$_SESSION['date']=$value->Maxval;
echo $_SESSION['date'];
header("refresh:0; url=driver.php");
?>