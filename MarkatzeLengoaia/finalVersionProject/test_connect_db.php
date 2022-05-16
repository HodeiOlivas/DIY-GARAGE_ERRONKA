<?php

	function connectDataBase()
		{
			if (!($connection=mysqli_connect("localhost","root","")))
			{
				echo "There is an error connecting the DB.";
				exit();
			}
			
			// if (!mysqli_select_db($connection,"db_enpresa"))
			if (!mysqli_select_db($connection, "db_pruebagarage1"))
	
			{
				echo "There is an error selecting the DB.";
				exit();
			}
			
			return $connection;
		}
