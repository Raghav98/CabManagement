	<!DOCTYPE html>
<html>
<head>
	<title>Driver-Home</title>
	<link href="Bootstrap\bootstrap-3.3.7-dist\css\bootstrap.min.css" rel="stylesheet">
<style type="text/css">
body{
	border: hidden;
}
#bgimg{
	background-image:url("nature.jpg");
	background-repeat: no-repeat;
	background-size:cover;
}
#btnform{

	text-align: center;
	padding:350px 50px 50px 50px;

}
#img{
	background-image:url("forest.jpg");
	background-repeat: no-repeat;
	background-size: 100%100%;
	height:800px;
}
#img1{
	background-image:url("beach.jpg");
	background-repeat: no-repeat;
	background-size: 100%100%;
	height:800px;
}
#fonts{
font-color:black;
}
</style>
<script>
  
function alertb(){
var con=confirm("Are you sure you want to pick the rider?");
if(con)
window.location='drivdb.php';
else
{alert("You have cancelled the ride");
window.location="home.html";
}

}
	

  </script>	
</head>
<body>
<nav>
<div class="row" id="bgimg">
     <div class="col-sm-6">
	      <section style="text-align: left; padding: 10px 25px 0px 10px;"><h4>Welcome, <span id="na"></span>!</h4></section>
     </div>		
     <div class="col-sm-6" style="text-align: right; padding: 10px 25px 10px 10px;">
         <a href="index.html" class="btn btn-warning">Log Out</a>
     </div>

</div>
</nav>                
           
<div class="row">
	<div class="col-sm-6" id="img1" style="background-color: blue; color:black">

    </div> <!-- END  OF COLUMN ONE-->
    <div class="col-sm-6" id="img" style="background-color: green; color: white">
	<h2>DRIVER_DATA</h2>
    <form name="btnform" id="fonts" action="drivdb.php" method="get"><button id="ride" class="btn btn-success" onClick="alertb()">Do you want to ride?</button><br><br>
	<input type="text" style="color:blue" name="userid" id="uid" value="<?php echo $_POST['sour']; ?>"><br><br>
	<input type="text" style="color:blue" name="sour" id="srce" value="<?php echo $_POST['desti']; ?>"><br><br>
	<input type="text" style="color:blue" name="destinat" id="des " value="<?php echo $_POST['userid']; ?>"><br><br>
	<input type="text" style="color:blue" name="dis" id="dista" value="<?php echo $_POST['dist']; ?>"><br><br>
	<input type="text" style="color:blue" name="cost" id="co" value="<?php echo $_POST['cost']; ?>"><br><br>
	<input type="button" style="color:blue"value="Check" class="btn btn-success"  onClick="document.location.href='process.php'"></button><br><br>
 
    <div id="hist" style="text-align: center; padding:50px 50px 50px 50px; display: none">
    	
    	dasfffffffffffff
		
	
    </div>
    </div> <!--END OF COLUMN TWO-->	
 </div>  <!--END OF FIRST ROW-->

<div class="row">
    <div class="col-sm-6">

 

</div>
</body>
</html>