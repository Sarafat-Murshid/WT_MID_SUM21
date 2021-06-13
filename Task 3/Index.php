<?php
	$x = 12;
	$y = 10;
	$z= $x + $y;
	
	function global_test(){
		global $z;
		$m=12;
		$n= $z+ $m;
		echo $n;
	}
	function print_hello(){
		print "hello world";
	}
	
	function add($x,$y){
		$sum=$x+$y;
		echo $sum;
		
	}
		
		$name="Sarafat Sarafat";
		echo strlen($name)."<br>";
		
		$pos = strpos($name,"i");
		$pos2 = strpos($name,"i",$pos);
		echo"$pos<br>$pos2<br>";
		if($pos===$pos2)
			echo"same";
		else
			echo"not same";
		echo "<h1>Hello Php $z</h1>";
		echo '<h1>Hello Php '.$z.'</h1>';
		
		if($z <50){
			$m= 15;
		}
	?>
	
<html>
	<head></head>
	<body>
		This is Plain Html
		We have access from private network and calculated result is <?php echo $z;?> and m= <?php echo $m;?>
		
		<?php
			$n = 9;
			$o = 10;
		?>	
		this is the end and calculation is <?php echo $n+$o; ?>
		
		this is function call
		<?php 
			print_hello();
		?>
		<br>
		
		This is addition of 10 and 12 <?php add(10,12)?>
		
		<?php global_test()?>
	</body>
</html>
	