<html>
    <body>
        <?php
			
			include("test_connect_db.php");
			session_start();
			$izena= $_SESSION['Izena'];
		
			//$id_reservation = $_POST["Id_reservation"];
			//$id_customers = $_POST["Id_customers"];
			$id_cabin = $_POST["id_cabin"];
			$date = $_POST["Date"];
			$starting_hour = $_POST["Starting_hour"];
			$ending_hour = $_POST["Ending_hour"];
			
	//echo $Starting_hour = (str)$Starting_hour;
	//echo gettype($Starting_hour);
	//echo $timestamp = strtotime($Starting_hour);
    //echo gettype($Ending_hour);
			
			
			
			$time1 = explode(':', $starting_hour);
			
			 $time1_h = (int)$time1[0];
		
			 $time1_m = (int)$time1[1];
			 
			
			$time2 = explode(':', $ending_hour);
			
			 $time2_h = (int)$time2[0];
			
			$time2_m = (int)$time2[1];
	
			
			
			 $time1_m_hour = $time1_m / 60;
			
			 $time2_m_hour = $time2_m / 60;
		
			
			 $Starting_hour = $time1_h + $time1_m_hour;
			 
			$Ending_hour = $time2_h + $time2_m_hour;
			
			
			
			$amount_hours = $Ending_hour - $Starting_hour;
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			//$amount_hour = ($ending_hour -($starting_hour));
			
			
			$link=KonektatuDatuBasera();
						
			
			$price = mysqli_query($link,"SELECT Price_Hour FROM cabin WHERE id_cabin = '$id_cabin'");
		
			$price_hour = mysqli_fetch_assoc($price);
		
			
			$total_price = ((double)$price_hour['Price_Hour'] * (double)$amount_hours);
		
			
			
			
			
			//$amount_hour = $_POST["Amount_hours"];
			//$total_price = $_POST["Total_price"];
			$lotura = KonektatuDatuBasera();
			$emaitza = mysqli_query($lotura, "insert into reserve (Id_customer,id_cabin,Date,Starting_hour,Ending_hour,Amount_hours,Total_price ) values( '$izena','$id_cabin', '$date','$starting_hour','$ending_hour','$amount_hours','$total_price')");
        
		
		
		
		?>
     
         <meta http-equiv="refresh" content="0;url=customers.php"> 
    </body>

</html>