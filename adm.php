<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"  xmlns:lang="kn" dir="ltr">
<head>
    <title>select faculty</title>
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
		<form action="admincopy.php" method="post">
			<input type="submit" class="button" value="submit" />
			<select class = "tt" name="aaname">
				<option value="PRINCIPAL">PRINCIPAL</option>
				<option value="CULTURAL HEAD">CULTURAL HEAD</option>
				<option value="RSST JOINT SECRETARY">RSST JOINT SECRETARY</option>
				<option value="PLACEMENT COORDINATOR">PLACEMENT COORDINATOR</option>
				<option value="RSST PRESIDENT">RSST PRESIDENT</option>
				<option value="DEAN STUD AFFAIRS">DEAN STUD AFFAIRS</option>
				<option value="ACCOUNTANT">ACCOUNTANT</option>
				<option value="COE HEAD">COE HEAD</option>
				<option value="REGISTRAR">REGISTRAR</option>
				<option value="PUBLIC RELATION">PUBLIC RELATION</option>
				<option value="COE SECRETARY">COE SECRETARY</option>
				<option value="DEAN PLACEMENT">DEAN PLACEMENT</option>
				<option value="LEGAL">LEGAL</option>
				<option value="SCHOLARSHIP SECRETARY">SCHOLARSHIP SECRETARY</option>
				<option value="PRINCIPAL SECRETARY">PRINCIPAL SECRETARY</option>
				<option value="DEAN ACADEMICS">DEAN ACADEMICS</option>
				<option value="DEAN INFRA">DEAN INFRA</option>
				<option value="RVCE CONTACT">RVCE CONTACT</option>
				
			</select>
			
		</form>
			

		
</div>
		
		
  	</div>  
</body>
</html>