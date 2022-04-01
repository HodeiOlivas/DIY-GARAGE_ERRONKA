<?php
	/*Datu Basearekin konektatzeko, localhost-ean dago root erabiltzailearekin*/ 
	function connectDataBase()
		{
			if (!($connection=mysqli_connect("localhost","root","")))
			{
				echo "There is an error connecting the DB.";
				exit();
			}
			/*Datu Baseko taula konekxioa*/
			if (!mysqli_select_db($connection,"db_beers"))
			{
				echo "There is an error selecting the DB.";
				exit();
			}
			return $connection;
		}
?>