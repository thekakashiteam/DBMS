<h2>ADMINISTRATIVE BLOCK VISITOR PASS</h2>
<?php
session_start();

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="vms2103";
	$d=$_SESSION['vid'];
	#$V2id= $_POST['vid'];
	#$_SESSION['vid']=$V2id;
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	//if(isset($_POST['submit'])){



		 $sql= "SELECT Vid,name,contact,adate,atime,apurpose,viname,aid from VISITOR,ACADEMIC,AVISIT,VISITEE,ADMIN where Vid = '$d' and Vid = V1id and V1id = Avid and Avcontact = Acontact and Acontact = Vicontact";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    echo "<table border=1 cellpadding=5>
    <tr>
    <th>VISITOR ID</th>
    <th>name</th>
    <th>contact</th>
    <th>date</th>
    <th>time</th>
    <th>purpose</th>
    <th>to meet</th>
    <th>office staff id</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>". $row['Vid'] ."</td>";
        echo "<td>".$row['name'] ."</td>";
        echo "<td>".$row['contact'] ."</td>";
        echo "<td>".$row['adate']."</td>" ;
        echo "<td>". $row['atime'] ."</td>";
        echo "<td>". $row['apurpose'] ."</td>";
        echo "<td>". $row['viname'] ."</td>";
         echo "<td>". $row['aid'] ."</td>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
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


<a href="goption.php" class="button">go back home</a>
</body>
</html>