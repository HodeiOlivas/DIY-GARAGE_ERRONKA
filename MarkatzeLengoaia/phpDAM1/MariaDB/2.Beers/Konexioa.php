<?php
	function Konektatzea()
	{
		if (!($link=mysqli_connect("localhost","root","")))
		{
			echo "Errorea datu-basearekin konektatzean.";
			exit();
		}
		if (!mysqli_select_db($link,"db_beers"))
		{
			echo "Errorea datu-basea hautatzean.";
			exit();
		}
		return $link;
	}
?>
