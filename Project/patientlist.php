<?php
	$id="";
	$err_id="";
	$name="";
	$err_name="";
	$dept="";
	$err_dept="";
	$pro="";
	$err_pro="";
	
	
	$err=false;
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["id"])){
			$err_id="ID Required";
			$err=true;
		}
		else if(!is_numeric($_POST["id"])){
			$err_id="Not a number";
			$err=true;
		}
		else if(is_numeric($_POST["id"])){
			$id=$_POST["id"];
		}
		if(empty($_POST["name"])){
			$err_name="Patient Name Required";
			$err = true;
		}
		else if(strlen($_POST["name"])<=6){
			$err_name="Must be greater than 6";
			$err = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["dept"])){
			$err_dept="Department Required";
			$err=true;
		}
		else{
			$dept=$_POST["dept"];
		}
		if(empty($_POST["pro"])){
			$err_pro="Profile Required";
			$err=true;
		}
		else{
			$pro=$_POST["pro"];
		}
		
	}
?>

<html>
	<head>
	<title>Patientlist</title>
	</head>
	
	<body>
		<div style="border:1px solid black">
			<h5 align="left"><a href ="homepage.php">Homepage</a><br><a href ="login.php">Login</a><br><a href ="profile.php">Profile</a><br><a href ="doctor.php">Back</a></h5>
			<h1 align="center">Patientlist</h1>
		</div>
		<br>
		<div style="border:1px solid black">
		<h2 align="left">Patient details</h2>
		</div>
		<br>
		<div align ="center">
			<fieldset>
				<form action="" method="post">
				<table>
					<tr>
						<td align="right">ID: </td>
						<td><input type="text" name="id" value="<?php echo $id;?>" placeholder="Id"></td>
						<td><span><?php echo $err_id;?></span></td>
					</tr>
					<tr>
						<td align="right">Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td align="right">Profile: </td>
						<td><input type="text" name="pro" value="<?php echo $pro;?>" placeholder="Profile"></td>
						<td><span><?php echo $err_pro;?></span></td>
					</tr>
					<tr>
					<td align="center" colspan="2"><input type="submit" name="submit"value="Add Patient"></td>
					</tr>
				</form>
			</fieldset>
		</div>
		<br>
		<div>
		<table width="100%" border="2">
			<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Department</td>
			<td>Profile</td>
			</tr>
			<tr>
			<td>01</td>
			<td>Jahid Islam</td>
			<td>Gastroenterologist</td>
			<td><a href="J.php">Jahid Islam</a></td>
			</tr>
			<tr>
			<td>02</td>
			<td>Abu Saif </td>
			<td>cardiologist</td>
			<td>-</td>
			</tr>
		</table>
		</div>
	</body>
</html>