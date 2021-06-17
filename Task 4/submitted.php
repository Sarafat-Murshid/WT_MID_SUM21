<html>
	<body>
		<h1>Form submitted</h1>
		<?php
			echo $name."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["cpass"]."<br>";
			echo $_POST["phone"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST[""]."<br>";
			echo $_POST["bio"]."<br>";
			
			$arr = $_POST["hear"];
			
			foreach($arr as $e){
				echo "$e <br>";
			}
		}
		?>
	</body>
</html>