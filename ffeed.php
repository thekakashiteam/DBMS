<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>jaiswal</title>
</head>
<body>
 <h1>WELCOME VISITOR</h1>
  <p> PLEASE GIVE YOUR VALUABLE FEEDBACK</p>
<form method="POST">
<label>vid</label>
<input type="text" name="vid" />
<br />
<select name = "feedback">
  <option value="SATISFACTORY">SATISFACTORY</option>
  <option value="GOOD">GOOD</option>
  <option value="VERY GOOD">VERY GOOD</option>
  <option value="EXCELLENT">EXCELLENT</option>
</select>
<input type="submit" value="Submit" name="submit">
</form>
</body>
</html>

<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="vms2103";
  $id= $_POST['vid'];
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  //if(isset($_POST['submit'])){
 $feedback=$_POST['feedback'];


     $query= "UPDATE FVISIT set ffeedback = '$feedback' where Fvid = '$id'";
  if (mysqli_query($conn,$query))
  { 
    #header('Location:type.php');
    echo "Stored";
  } 
  else 
  {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
  $conn->close();
?>