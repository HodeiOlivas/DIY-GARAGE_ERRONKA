<?PHP
	#Konekzioa egin
	include("test_connect_db.php");
	$link=Konektatzea();
	
	# Array bidirekzionala da. Horretarako "$_FILES" metodoa erabiltzen da. 
	 	printf( 'Arrayan dagoen guztia bistaratu: <br>');
		print_r($_FILES);
		
		echo'<br><br>';
		echo 'Argazkiaren izena: --> ';
		print_r($_FILES['Argazk']['name']);
		
		echo'<br><br>';
		echo 'Argazki mota: --> ';
		print_r($_FILES['Argazk']['type']);
		
		echo'<br><br>';
		echo 'Argazkiaren helbidea: --> ';
		print_r($_FILES['Argazk']['tmp_name']);
	  
	
	$serbitzarikoHelbidea = 'Argazkiak/DB'; 							# Karpeta sortu "Argazkiak", honen barruan beste bat "DB". 
	$helbideTemporala = 	$_FILES['Argazk']['tmp_name']; 				# Argazkiaren helbidea:
	$argazkiIzena = 		$_FILES['Argazk']['name']; 					# Argazki izena:
	$bukaeraHelbidea = 		$serbitzarikoHelbidea.'/'.$argazkiIzena; 	# Bukaerako helbidearen helbidea gorde. 
	move_uploaded_file($helbideTemporala,$bukaeraHelbidea); 			# Argazkiaren kopia bat egin "Argazkiak/DB" karpetan. 
	
	
	
	
	#Txertatu erregistroa
	mysqli_query($link,"insert into igoirudiak(Argazkia) values('".$bukaeraHelbidea."')");
	
	
	#Konexioa itxi
	mysqli_close($link);
	
	echo'<br><br><br>';
	echo'<a href="Bistaratu.php"> Bistaratu </a>';
?>