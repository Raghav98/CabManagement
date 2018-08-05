<?php
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$uid=$_SESSION['User_id'];
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully\n";
if(!mysqli_select_db($conn,'cabproject'))
{
	echo "Database Not Selected";
}
$_SESSION['sourc']= $_POST['src'];
$_SESSION['dest']= $_POST['dst'];
$_SESSION['dis']= $_POST['dist'];
$_SESSION['dur']= $_POST['durat'];
$_SESSION['cost']= $_POST['cost'];
$_SESSION['car']=$_POST['carn'];
/*$sou=$_SESSION['sourc'];
$des=$_SESSION['dest'];
$dis=$_SESSION['dis'];
$dur=$_SESSION['dur'];
$co=$_SESSION['cost'];*/
echo("\ndata stored in session values\n");
//$quer="INSERT INTO driv_ref(User_id,source,destination,distance,duration,cost) VALUES ('$uid','$sou','$des','$dis','$dur','$co');";
/*if(!mysqli_query($conn,$quer))
{
	//die("Error in inserting Records");
}
else
{
	echo"\nData Inserted\n";
}
if($_SESSION['User_id'])
	{
	
         //echo ' <input type="text" name="userid" value="'.$_SESSION['User_id'].'"></input>';
		 // echo ' <input type="text" name="sour" value="'.$_SESSION['sourc'].'"></input>';
		 // echo ' <input type="text" name="destinat" value="'.$_SESSION['dest'].'"></input>';
		 //  echo ' <input type="text" name="dis" value="'.$_SESSION['dis'].'"></input>';
		 
	}*/
header("refresh:3; url= userhisto.html");
?>
	
	