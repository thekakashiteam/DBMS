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
		<form action="facultycopy.php" method="post">
			<input type="submit" class="button" value="submit" />
			<select class = "tt" name="fname">
				<option value="Ms.PADMASHREE T">Ms.PADMASHREE T</option>
				<option value="Mr.RAJASHEKARA MURTHY S">Mr.RAJASHEKARA MURTHY S</option>
				<option value="Ms.GEETHA V">Ms.GEETHA V</option>
				<option value="Ms.CHETHANA R MURTHY">Ms.CHETHANA R MURTHY</option>
				<option value="Mr.SRINIVAS B K">Mr.SRINIVAS B K</option>
				<option value="Ms.MERIN MELEET">Ms.MERIN MELEET</option>
				<option value="Mr.RAGHAVENDRA PRASAD S G">Mr.RAGHAVENDRA PRASAD S G</option>
				<option value="Smitha G R">Smitha G R</option>
				<option value="Ms.SWETHA S">Ms.SWETHA S</option>
				<option value="Dr.MAMATHA G S">Dr.MAMATHA G S</option>
				<option value="Ms.PRIYA D">Ms.PRIYA D</option>
				<option value="Ms.MAHESHWARI D G">Ms.MAHESHWARI D G</option>
				<option value="Ms.ANISHA B S">Ms.ANISHA B S</option>
				<option value="Dr.CAUVERY N K">Dr.CAUVERY N K</option>
				<option value="Ms.ROOPA E">Ms.ROOPA E</option>
				<option value="Vanishree K">Vanishree K</option>
				<option value="Dr.SHANTHARAM NAYAK">Dr.SHANTHARAM NAYAK</option>
				<option value="Dr.NAGARAJ G CHOLLI">Dr.NAGARAJ G CHOLLI</option>
				<option value="Ms.KAVITHA S N">Ms.KAVITHA S N</option>
				<option value="Dr.SRINIVASAN G N">Dr.SRINIVASAN G N</option>
				<option value="Dr.SAGAR B M">Dr.SAGAR B M</option>
				<option value="Ms.SUSHMITHA N">Ms.SUSHMITHA N</option>
				
			</select>
			
		</form>
			

		
</div>
		
		
  	</div>  
</body>
</html>