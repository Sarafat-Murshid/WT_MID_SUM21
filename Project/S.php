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
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	
	$err=false;
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["id"])){
			$err_id="ID Required";
			$err=true;
		}
		else{
			$id=$_POST["id"];
		}
		if(empty($_POST["name"])){
			$err_name="Name Required";
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
		else{
			$fee=$_POST["fee"];
		}
		if(empty($_POST["pro"])){
			$err_pro="Profile Required";
			$err=true;
		}
		else{
			$pro=$_POST["pro"];
		}
		if (!isset($_POST["day"])){
				$err_day="Day must be selected";
		}
		else{
			$day=$_POST["day"];
		}
		if (!isset($_POST["month"])){
			$err_month="Month must be selected";
		}
		else{
			$month=$_POST["month"];
		}
		if (!isset($_POST["year"])){
			$err_year="Year must be selected";
		}
		else{
			$year=$_POST["year"];
		}
	}
?>
<html>
	<head>
	<title>Profile</title>
	</head>
	<body>
		<div style="border:1px solid black">
			<h5 align="left"><a href ="homepage.php">Homepage</a><br><a href ="doctor.php">Back</a></h5>
			<h1 align="center">Doctor Profile</h1>
		</div>
		<br>
		<div style="border:1px solid black">
		<h2 align="left">Doctor details</h2>
		</div>
		<br>
		<div>
			<table width="100%" border="2">
				<tr>
				<td colspan="6" align="center">Profile Details</td>
				</tr>
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
			</table>
		</div>`
		<div align ="center">
			<fieldset>
				<form action="" method="post">
				<table>
					<tr>
						<td align="right">ID: </td>
						<td><input type="number" name="id" value="<?php echo $id;?>" placeholder="Id"></td>
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
						<td><input type="number" name="fee" value="<?php echo $fee;?>" placeholder="Fees"></td>
						<td><span><?php echo $err_fee;?></span></td>
					</tr>
					<tr>
						<td align="right">Profile: </td>
						<td><input type="text" name="pro" value="<?php echo $pro;?>" placeholder="Profile"></td>
						<td><span><?php echo $err_pro;?></span></td>
					</tr>
					<tr>
					<td align="Right">Birth Date:</td>
					<td>
						<select name="day">
							<option selected disabled>Day</option>
									<?php
										for($i=1;$i<=31;$i++)
										{
											echo "<option>$i</option>";
										}
									?>
						</select>
						<select name="month">
							<option selected disabled>Month</option>
									<?php
										$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
										for($j=0;$j<count($mon);$j++)
										{
											echo "<option>$mon[$j]</option>";
										}
									?>
						</select>
						<select name="year">
							<option selected disabled>Year</option>
									<?php
										for($k=1948;$k<=2020;$k++)
										{
											echo "<option>$k</option>";
										}
									?>
						</select>
						</td>
						<td><?php echo "$err_day"."  "."$err_month"."  "."$err_year"?></td>
					</tr>
					<tr>
					<td align="center" colspan="2"><input type="submit" name="submit"value="Change Doctor Settings"></td>
					</tr>
				</form>
			</fieldset>
		</div>
	</body>