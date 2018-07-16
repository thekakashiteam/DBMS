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
  <p> VISITOR FOR ADMINISTRATIVE BLOCK</p>
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
	#$avid= $_POST['vid'];
	#$_SESSION['vid']= $avid;
	$Vid=$_SESSION['vid'];
	$avcontact= $_POST['contact'];
	#$adate= $_POST['date'];
	#$atime= $_POST['time'];
	$dt= date("y-m-d");
	$t= date("h:i:s");
	$apurpose= $_POST['purpose'];
	#$afeedback= $_POST['feedback'];
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(isset($_POST['submit'])){

		 $query= "INSERT INTO AVISIT(Avid,Avcontact,adate,atime,apurpose) VALUES ('$Vid','$avcontact','$dt','$t','$apurpose')";

	if (mysqli_query($conn,$query))
	{	
		header('Location:ap.php'); 
		echo "Stored";
	} 
	else 
	{
		echo "Error: " . $query . "<br>" . $conn->error;
	}
}
	
	$conn->close();
?>