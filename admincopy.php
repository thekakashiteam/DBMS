<h1>ADMINISTRATIVE BLOCK VISITOR</h1>
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


<a href="adm.php" class="button">go back home</a>
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
$aaname = $_POST['aaname'];
$sql = "SELECT viname,Vicontact,vigender,viaddress,aid,designation,Vid,name,occupation,gender,address,gid,contact,apurpose,adate,atime,afeedback from VISITEE,ADMIN,AVISIT,ACADEMIC,VISITOR where designation = '$aaname' and Vicontact = Acontact and Avcontact = Acontact and V1id = Avid and Vid = V1id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border=1 cellpadding=5>
    <tr>
    <th>name</th>
    <th>contact</th>
    <th>gender</th>
    <th>email</th>
    <th>aid</th>
    <th>designation</th>
    <th>VISITOR ID</th>
    <th>vi name</th>
    <th>occupation</th>
    <th>vi gender</th>
    <th>vi email</th>
    <th>guard id</th>
    <th>vi contact</th>
    <th>purpose</th>
    <th>date</th>
    <th>time</th>
    <th>feedback</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>". $row['viname'] ."</td>";
        echo "<td>".$row['Vicontact'] ."</td>";
        echo "<td>".$row['vigender'] ."</td>";
        echo "<td>".$row['viaddress']."</td>" ;
        echo "<td>". $row['aid'] ."</td>";
        echo "<td>". $row['designation'] ."</td>";
        echo "<td>". $row['Vid'] ."</td>";
        echo "<td>". $row['name'] ."</td>";
        echo "<td>". $row['occupation'] ."</td>";
        echo "<td>". $row['gender'] ."</td>";
        echo "<td>". $row['address'] ."</td>";
        echo "<td>". $row['gid'] ."</td>";
        echo "<td>". $row['contact'] ."</td>";
        echo "<td>". $row['apurpose'] ."</td>";
        echo "<td>". $row['adate'] ."</td>";
        echo "<td>". $row['atime'] ."</td>";
        echo "<td>". $row['afeedback'] ."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
 