<?php
session_start()
?>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>jaiswal</title>
</head>
<body>
 <h1>WELCOME</h1>
  <p> VISITOR FOR NON ACADEMIC PURPOSE</p>
<form method="POST">
<!--<label>v2id</label>
<input type="text" name="vid" />
<br />-->
<!--<label>date</label>-->
<!--<input type="text" name="date" />
<br />
<label>time</label>
<input type="text" name="time" />
<br />-->
<label>purpose</label>
<input type="text" name="purpose" />
<br />
<!--<label>feedback</label>
<input type="text" name="feedback" />-->
<input type="submit" value="Submit" name="submit">
</form>
 
 
  
</body>
</html>
 <?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="vms2103";
	#$V2id= $_POST['vid'];
	$Vid=$_SESSION['vid'];
	#$date= $_POST['date'];
	$dt= date("y-m-d");
	$t= date("h:i:s");

	#$t= time();
	#$time= $_POST['time'];
	$purpose= $_POST['purpose'];
	#$feedback= $_POST['feedback'];
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(isset($_POST['submit'])){



		 $query= "INSERT INTO NONACADEMIC(V2id,ndate,ntime,npurpose) VALUES ('$Vid','$dt','$t','$purpose')";
	if (mysqli_query($conn,$query))
	{	
		header('Location:nonp.php');
		echo "Stored";
	} 
	else 
	{
		echo "Error: " . $query . "<br>" . $conn->error;
	}}
	$conn->close();
?>