<?php
	$id="";
	$err_id="";
	$name="";
	$err_name="";
	$dept="";
	$err_dept="";
	$fee="";
	$err_fee="";
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
			$err_name="Doctor Name Required";
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
		if(empty($_POST["fee"])){
			$err_fee="Fees Required";
			$err=true;
		}
		else if(!is_numeric($_POST["fee"])){
			$err_fee="Not a number";
			$err=true;
		}
		else if(is_numeric($_POST["fee"])){
			$fee=$_POST["fee"];
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
	<title>Doctor</title>
	</head>
	
	<body>
		<div style="border:1px solid black">
			<h5 align="left"><a href ="homepage.php">Homepage</a>
							<br>
						    <a href ="login.php">Login</a>
							<br>
							<a href ="profile.php">Profile</a>
							<br>
							<a href ="patientlist.php">Patientlist</a>
							<br>
							<a href ="appointmentlist.php">Appointmentlist</a>
							</h5>
			<h1 align="center">Doctor</h1>
		</div>
		<br>
		<div style="border:1px solid black">
		<h2 align="left">Doctor details</h2>
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
						<td align="right">Department: </td>
						<td><input type="text" name="dept" value="<?php echo $dept;?>" placeholder="Department"></td>
						<td><span><?php echo $err_dept;?></span></td>
					</tr>
					<tr>
						<td align="right">Fees: </td>
						<td><input type="text" name="fee" value="<?php echo $fee;?>" placeholder="Fees"></td>
						<td><span><?php echo $err_fee;?></span></td>
					</tr>
					<tr>
						<td align="right">Profile: </td>
						<td><input type="text" name="pro" value="<?php echo $pro;?>" placeholder="Profile"></td>
						<td><span><?php echo $err_pro;?></span></td>
					</tr>
					<tr>
					<td align="center" colspan="2"><input type="submit" name="submit"value="Add Doctor"></td>
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
			<td>Consult Time</td>
			<td>Fees</td>
			<td>Profile</td>
			</tr>
			<tr>
			<td>01</td>
			<td>Sarafat Murshid</td>
			<td>Gastroenterologist</td>
			<td>5.00 pm - 9.00 pm</td>
			<td>500tk</td>
			<td><a href="S.php">Sarafat Murshid</a></td>
			</tr>
			<tr>
			<td>02</td>
			<td>Haidar Ali</td>
			<td>Cardiologist</td>
			<td>4.00 pm - 9.00 pm</td>
			<td>800tk</td>
			<td><a href="H.php">Haidar Ali</a></td>
			</tr>
		</table>
		</div>
	</body>
</html>