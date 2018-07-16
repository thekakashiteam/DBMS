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
  <p> VISITOR FOR FACULTY</p>
<form method="POST">
<!--<label>visitor id</label>
<input type="text" name="vid" />
<br />-->
<label>contact of visitee</label>
<input type="text" name="contact" />
<br />
<!--<label>feedback</label>
<input type="text" name="feedback" />
<br />-->
<!--<label>date</label>
<input type="text" name="date" />
<br />
<label>time</label>
<input type="text" name="time" />
<br />-->
<label>purpose</label>
<input type="text" name="purpose" />
<br />
<input type="submit" value="Submit" name="submit">
</form>
 
 
  
</body>
</html>
 <?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="vms2103";
	#$fvid= $_POST['vid'];
	$Vid=$_SESSION['vid'];
	#$_SESSION['vid']= $fvid;
	$fvcontact= $_POST['contact'];
	$dt= date("y-m-d");
	$t= date("h:i:s");
	#$fdate= $_POST['date'];
	#$ftime= $_POST['time'];
	$fpurpose= $_POST['purpose'];
	#$ffeedback= $_POST['feedback'];
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(isset($_POST['submit'])){

		 $query= "INSERT INTO FVISIT(Fvid,Fvcontact,fdate,ftime,fpurpose) VALUES ('$Vid','$fvcontact','$dt','$t','$fpurpose')";

	if (mysqli_query($conn,$query))
	{	
		header('Location:fp.php');
		echo "Stored";
	} 
	else 
	{
		echo "Error: " . $query . "<br>" . $conn->error;
	}
	}
	$conn->close();
?>