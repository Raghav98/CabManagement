<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src=""></script>  

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <!--<script src="js/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    
    <script src="js/skel.min.js"></script>
    
    <script src="js/init.js"></script>
    <noscript>
      <link rel="stylesheet" href="css/skel.css" />
      <link rel="stylesheet" href="css/style1.css" />
      <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>

<style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }

    .image{
      background-image:url("light-color-background-hd-1.jpg");
      background-size: stretch;
      background-repeat: no-repeat; 
    }



    .btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.42;
  border-radius: 15px;
}

.fcolor{
  color:purple;
}

.cus{
  margin-bottom: 10px;
}

#tab {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#tab td, #tab th {
    border: 1px solid #ddd;
    padding: 8px;
	}

#tab tr:nth-child(even){background-color:lightgoldenrodyellow;}

#tab tr:hover {background-color: peachpuff;}

#tab th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: darkkhaki;
    color: white;
}
  
  </style>
</head>
<body>
	

<?php
//session_start();
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
echo "<h3 style='color:purple'>The data you requested:</h3><br><br>";
if(!mysqli_select_db($conn,'cabproject'))
{
	echo "Database Not Selected";
}
if(($_POST['tabid'])=='1')

{

		$result=mysqli_query($conn,"SELECT * from drivers;");
		if (!$result) {
		    printf("Error: %s\n", mysqli_error($conn));
		    exit();
		}
		echo "<table id='tab' border='1'>
		<tr>
		<th>Driv_id</th>
		<th>Driver Name</th>
		<th>Ph_no</th>
		<th>Driv_mail</th>
		<th>Create_pass</th>
		<th>Confirm_pass</th>
		<th>Address</th>
		</tr>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['Driv_id'] . "</td>";
			echo "<td>" . $row['Driv_name'] . "</td>";
			echo "<td>" . $row['Ph_no'] . "</td>";
			echo "<td>" . $row['Driv_mail'] . "</td>";
			echo "<td>" . $row['Create_pass'] . "</td>";
			echo "<td>" . $row['Confirm_pass'] . "</td>";
			echo "<td>" . $row['Address'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
}		

else if(($_POST['tabid'])=='2')

{

		$result=mysqli_query($conn,"SELECT * from cars;");
		if (!$result) {
		    printf("Error: %s\n", mysqli_error($conn));
		    exit();
		}
		echo "<table id='tab' border='1'>
		<tr>
		<th>Car_id</th>
		<th>Car_Name</th>
		<th>Car_Number</th>
		</tr>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['Car_id'] . "</td>";
			echo "<td>" . $row['Car_Name'] . "</td>";
			echo "<td>" . $row['Car_Numb'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
}	

else if(($_POST['tabid'])=='3')

{

		$result=mysqli_query($conn,"SELECT * from users;");
		if (!$result) {
		    printf("Error: %s\n", mysqli_error($conn));
		    exit();
		}
		echo "<table id='tab' border='1'>
		<tr>
		<th>User_id</th>
		<th>User Name</th>
		<th>Phone_no</th>
		<th>Email_id</th>
		<th>Create_pass</th>
		<th>Confirm_pass</th>
		<th>Address</th>
		</tr>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['User_id'] . "</td>";
			echo "<td>" . $row['user_name'] . "</td>";
			echo "<td>" . $row['Phone_no'] . "</td>";
			echo "<td>" . $row['Email_id'] . "</td>";
			echo "<td>" . $row['Create_pass'] . "</td>";
			echo "<td>" . $row['Confirm_pass'] . "</td>";
			echo "<td>" . $row['Address'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
}
//header("refresh:15; url=admin_test.html");
?>

</body>
</html>