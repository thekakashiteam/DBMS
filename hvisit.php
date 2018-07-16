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
  <p> VISITOR FOR HOSTELITE</p>
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
	#$hvid= $_POST['vid'];
	#$_SESSION['vid']= $hvid;
	$Vid=$_SESSION['vid'];
	$hvcontact= $_POST['contact'];
	#$hdate= $_POST['date'];
	#$htime= $_POST['time'];
	$dt= date("y-m-d");
	$t= date("h:i:s");
	$hpurpose= $_POST['purpose'];
	#$hfeedback= $_POST['feedback'];
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(isset($_POST['submit'])){

		 $query= "INSERT INTO HVISIT(Hvid,Hvcontact,hdate,htime,hpurpose) VALUES ('$Vid','$hvcontact','$dt','$t','$hpurpose')";

	if (mysqli_query($conn,$query))
	{	
		header('Location:hp.php');
		echo "Stored";
	} 
	else 
	{
		echo "Error: " . $query . "<br>" . $conn->error;
	}
}
	
	$conn->close();
?>