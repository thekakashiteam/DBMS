<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"  xmlns:lang="kn" dir="ltr">
<head>
    <title>select hostel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
	.outer{
		color: red;
		width: 1200px;
		height: 800px;
		float: right;
		text-align: center;
		background: white;
		}
	
	.admin{
		color:white;
		magin-left: 25px;
		margin-top:150px;
	      }
	.exit{
		color:white;
		magin-left: 25px;
	      }
	
	.tt{
		width:250px;
		height:50px;
		margin-top:300px;
		}
	
    </style>
</head>
<body style="width: 100%; height: 100%;">
    <div style="width: 150px; height: 1000px; position: absolute; float: left; background: blue; text-align: center;">
	<div class = "admin">
    		<a href= "report.php"><button style="width: 100px; height: 50px; color: black; border-radius: 15px;;">Go To Home Page</button></a>
	</div>
	<div class = "exit">
    		<h3>EXIT</h3>
	</div>
    </div>
    <div class = "outer">
		<form action="hostelcopy.php" method="post">
			<input type="submit" class="button" value="submit" />
			<select class = "tt" name="hhname">
				<option value="Cauvery">CAUVERY</option>
				<option value="SIR M.V BLOCK HOSTEL">SIR M.V BLOCK HOSTEL</option>
				<option value="CHAMUNDI HOSTEL">CHAMUNDI HOSTEL</option>
				<option value="DIAMOND JUBLEE HOSTEL">DIAMOND JUBLEE HOSTEL</option>
				
			</select>
			
		</form>
			

		
</div>
		
		
  	</div>  
</body>
</html>