
<h1>FACULTY VISITOR</h1>
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


<a href="fac.php" class="button">go back home</a>
</body>
</html>
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="vms2103";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$fname = $_POST['fname'];
$sql = "SELECT * from VISITOR ,ACADEMIC,FVISIT,FACULTY,VISITEE where Viname='$fname' AND Vicontact =Fcontact AND Fcontact=Fvcontact AND Fvid = V1id AND V1id = Vid";
#$sql = "SELECT * from VISITEE";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border=1 cellpadding=5>
    <tr>
    <th>VID</th>
    <th>Name</th>
    <th>Occ</th>
    <th>Contact</th>
    <th>Email</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>". $row['Vid'] ."</td>";
        echo "<td>".$row['name'] ."</td>";
        echo "<td>".$row['occupation'] ."</td>";
        echo "<td>".$row['contact'] ."</td>";
        echo "<td>".$row['address']."</td>" ;
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
