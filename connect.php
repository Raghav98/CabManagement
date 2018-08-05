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
$radio=$_POST['custdriver'];
$name=$_POST['uname'];
$phone_no=$_POST['ph'];
$email=$_POST['email'];
$crepass=$_POST['password'];
$conpass=$_POST['password_confirm'];
$address=$_POST['address'];
//driver entry
/*if (empty($username)) { array_push($errors, "username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone_no)) { array_push($errors, "Phone_no is required"); }
  if (empty($crepass)) { array_push($errors, "Password is required"); }*/
  if ($crepass!= $conpass) {
	array_push($errors, "The two passwords do not match. Please Signup again");
  }
  if($radio=='customer')
{		
  $user_check_query = "SELECT * FROM users WHERE user_name='$name' OR Email_id='$email'  OR Phone_no='$phone_no' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
   if ($user) { // if user exists
    if ($user['user_name'] === $name) {
      array_push($errors, "Username already exists");
    }
    if ($user['Email_id'] === $email) {
      array_push($errors, "email already exists");
    }
	 if ($user['Phone_no'] === $phone_no) {
      array_push($errors, "phone_no already exists");
  }
   }
   
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0)
	  {
  	//$crepass = md5($crepass);
	//$conpass=md5($conpass);//encrypt the password before saving in the database
$query="INSERT INTO users(user_name,Phone_no,Email_id,Create_pass,Confirm_pass,Address) VALUES ('$name','$phone_no','$email','$crepass','$conpass','$address')";
if(!mysqli_query($conn,$query))
{
	die("Error in inserting Records");
}
else
{
	echo"Data Inserted";	
header("refresh:0;url=home.html");
		}
	}
}
 if($radio=='driver')
{		
  $user_check_query = "SELECT * FROM drivers WHERE Driv_name='$name' OR Driv_mail='$email'  OR Ph_no='$phone_no' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
   if ($user) { // if user exists
    if ($user['Driv_name'] === $username) {
      array_push($errors, "Username already exists");
    }
    if ($user['Driv_mail'] === $email) {
      array_push($errors, "email already exists");
    }
	 if ($user['Ph_no'] === $phone_no) {
      array_push($errors, "phone_no already exists");
  }
   }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0)
	  {
  	//$crepass = md5($crepass);
	//$conpass=md5($conpass);//encrypt the password before saving in the database
$query="INSERT INTO drivers(Driv_Name,Ph_no,Driv_mail,Create_pass,Confirm_pass,Address) VALUES ('$name','$phone_no','$email','$crepass','$conpass','$address')";
if(!mysqli_query($conn,$query))
{
	die("Error in inserting Records");
}
else
{
	echo"Data Inserted";	
header("refresh:1; url=sigin.html");
		}
	}
}

else if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
  <?php header("refresh:8; url=signup.html");?>
 <?php endif ?>