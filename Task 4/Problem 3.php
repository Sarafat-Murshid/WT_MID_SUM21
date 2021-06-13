<?php
	$height = 5;
	$width = 2;
	if($height==$width) echo "This shape is a square.";
	else
	{
		$area = $height * $width;
		echo "Area is: ".$area;
		$perimeter = 2 * ($height + $width);
		echo "<br>Perimeter is: ".$perimeter;
	}
?>