<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$errors = array();
$uid=$_SESSION['User_id'];
$did=$_SESSION['Driv_id'];
$dat=$_SESSION['date'];
//$num=$_SESSION['value'];
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
$result=mysqli_query($conn,"SELECT User_name,Driv_name,Source,destination,distance,Date,duration,price,car_nam FROM users,drivers,userhistory where users.User_id=$uid and drivers.Driv_id=$did and userhistory.User_id=$uid and userhistory.Driv_id=$did and userhistory.historyno=$dat");
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
echo "<table border='1'>
<tr>
<th>User Name</th>
<th>Driver Name</th>
<th>Source</th>
<th>Destination</th>
<th>Date</th>
<th>Price</th>
<th>Car</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['User_name'] . "</td>";
	echo "<td>" . $row['Driv_name'] . "</td>";
	echo "<td>" . $row['Source'] . "</td>";
	echo "<td>" . $row['destination'] . "</td>";
	echo "<td>" . $row['Date'] . "</td>";
	echo "<td>" . $row['price'] . "</td>";
	echo "<td>" . $row['car_nam'] . "</td>";
	echo "</tr>";
}
echo "</table>";
header("refresh:3; url=userhisto.html");
?>