<?php
error_reporting(0);
session_start();
?>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>jaiswal</title>
</head>
<body>
 <h1>WELCOME VISITOR</h1>
  <p> PLEASE ENTER YOUR DETAILS</p>
<form method="POST">
<label>vid</label>
<input type="text" name="vid" />
<br />
<label>name</label>
<input type="text" name="name" />
<br />
<label>occupation</label>
<input type="text" name="occupation" />
<br />
<label>gender</label>
<input type="text" name="gender" />
<br />
<label>email</label>
<input type="text" name="address" />
<br />
<!--<label>gid</label>
<input type="text" name="gid" />
<br />-->
<label>contact</label>
<input type="text" name="contact" />
<br />
<input type="submit" value="Submit" name="submit">
</form>
 
 <a href= "goption.php"><button style="width: 100px; height: 50px; color: black; border-radius: 15px;;">Go back</button></a>
  
</body>
</html>
 <?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="vms2103";
	$Vid= $_POST['vid'];
	$_SESSION['vid']= $Vid;
	$gid= $_SESSION['uname'];
	$name= $_POST['name'];
	$occupation= $_POST['occupation'];
	$gender= $_POST['gender'];
	$address= $_POST['address'];
	#$gid= $_POST['gid'];
	$contact= $_POST['contact'];
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	//if(isset($_POST['submit'])){



		 $query= "INSERT INTO VISITOR(Vid,name,occupation,gender,address,gid,contact) VALUES ('$Vid','$name','$occupation','$gender','$address','$gid','$contact')";
	if (mysqli_query($conn,$query))
	{	
		header('Location:type.php');
		echo "Stored";
	} 
	else 
	{
		echo "Error: " . $query . "<br>" . $conn->error;
	}
	$conn->close();
?>