<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$uid=$_SESSION['User_id'];
$did=$_SESSION['Driv_id'];
//echo"'$did','$uid'";
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
$result=mysqli_query($conn,"SELECT User_name,Driv_name,source,destination,distance,Date,duration,price FROM users,drivers,userhistory where users.User_id='$uid' and drivers.Driv_id='$did' and Date='CURDATE()'");
//$quer = mysqli_fetch_assoc($result);
if($result)
	{	
echo "<table border='1'>
<tr>
<th>User Name</th>
<th>Driver Name</th>
<th>Source</th>
<th>Destination</th>
<th>Date</th>
<th>Price</th>
</tr>";
	while($row=mysqli_fetch_array($result))
	{
	echo "<tr>";
	echo "<td>" . $row['User_name'] . "</td>";
	echo "<td>" . $row['Driv_name'] . "</td>";
	echo "<td>" . $row['source'] . "</td>";
	echo "<td>" . $row['destination'] . "</td>";
	echo "<td>" . $row['Date'] . "</td>";
	echo "<td>" . $row['price'] . "</td>";
	echo "</tr>";
	}
	echo "</table>";
//header("refresh:15; url=des.php");
	}
else
{
	echo"Error printing record of user";
	//header("refresh:15; url=des.php");
	}
?>