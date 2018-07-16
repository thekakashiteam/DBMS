
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>
 <!--<form method="POST">
<label>visitor id</label>
<input type="text" name="vid" />
<br />
<input type="submit" value="Submit" name="submit">
</form>-->
<div class="container">
  <h1>ACADEMIC PURPOSE VISITOR</h1>
  <p> PLEASE SELECT YOUR TYPE OF VISIT</p>
  <div class="btn-group">
    <a href="hvisit.php" button type="button" class="btn btn-primary">HOSTELITE</button>
      <a href="fvisit.php" button type="button" class="btn btn-primary">FACULTY</button>
    <a href="avisit.php" button type="button" class="btn btn-primary" a=>ADMIN BLOCK</button>
  </div>
</div>
<a href="type.php" class="button">go back</a>
</body>
</html>
<?php
session_start();

  $servername="localhost";
  $username="root";
  $password="";
  $dbname="vms2103";
  #$Vid= $_POST['vid'];
  $d=$_SESSION['vid'];
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  //if(isset($_POST['submit'])){



      $query="INSERT INTO ACADEMIC(V1id) VALUES ('$d')"; 
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
