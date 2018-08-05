<?php
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$uid=$_SESSION['User_id'];
$sou=$_SESSION['sourc'];
$des=$_SESSION['dest'];
$dis=$_SESSION['dis'];
$dur=$_SESSION['dur'];
$co=$_SESSION['cost'];
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
?>
<form action="driver.php" method="post">
<input type="hidden" name="sour" value="<?php echo $sou; ?>">
<input type="hidden" name="desti" value="<?php echo $des; ?>">
<input type="hidden" name="userid" value="<?php echo $uid; ?>">
<input type="hidden" name="dist" value="<?php echo $dis; ?>">
<input type="hidden" name="cost" value="<?php echo $co; ?>">

<input type="submit" value="Edit">
</form>
<?php
header("refresh:16; url=driver.php");
?>