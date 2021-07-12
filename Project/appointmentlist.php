<?php
	$id="";
	$err_id="";
	$name="";
	$err_name="";
	$dept="";
	$err_dept="";
	$fee="";
	$err_fee="";
	$date="";
	$err_date="";
	$appd="";
	$err_appd="";
	
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
		if(empty($_POST["appd"])){
			$err_appd="Appointed Doctor Required";
			$err=true;
		}
		else{
			$appd=$_POST["appd"];
		}
		if(empty($_POST["date"])){
			$err_date="Date Required";
			$err=true;
		}
		else{
			$date=$_POST["date"];
		}
	}
?>

<html>
	<head>
	<title>Appointmentlist</title>
	</head>
	
	<body>
		<div style="border:1px solid black">
			<h5 align="left"><a href ="homepage.php">Homepage</a><br><a href ="login.php">Login</a><br><a href ="profile.php">Profile</a><br><a href ="doctor.php">Back</a></h5>
			<h1 align="center">Appointmentlist</h1>
		</div>
		<br>
		<div style="border:1px solid black">
		<h2 align="left">Appointment details</h2>
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
						<td align="right">Patient name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Patient Name"></td>
						<td><span><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td align="right">Appointment Date: </td>
						<td><input type="number" name="date" value="<?php echo $date;?>" placeholder="Appointment Date"></td>
						<td><span><?php echo $err_date;?></span></td>
					</tr>
					<tr>
						<td align="right">Appointed Doctor: </td>
						<td><input type="text" name="appd" value="<?php echo $appd;?>" placeholder="Appointed Doctor"></td>
						<td><span><?php echo $err_appd;?></span></td>
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
			<td>Patient name</td>
			<td>Appointment Date</td>
			<td>Appointed Doctor</td>
			</tr>
			<tr>
			<td>01</td>
			<td><a href="J.php">Jahid Islam</a></td>
			<td>29-06-2021</td>
			<td><a href="S.php">Sarafat Murshid</a></td>
			</tr>
			<tr>
			<td>02</td>
			<td>Abu Saif</td>
			<td>29-06-2021</td>
			<td><a href="H.php">Haidar Ali</a></td>
			</tr>
		</table>
		</div>
	</body>
</html>