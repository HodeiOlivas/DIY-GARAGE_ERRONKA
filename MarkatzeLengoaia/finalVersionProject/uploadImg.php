<?PHP
	#make the connection
	include("test_connect_db.php");
	$link= connectDataBase();
    $ID =  $_POST['productID'];
    $name = $_POST['nameProd'];
    $price = $_POST['priceProd'];
    $description = $_POST['descriptionProd'];
	
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
		
	
	$serbitzarikoHelbidea = 'img_Products';
	$helbideTemporala = 	$_FILES['Argazk']['tmp_name']; 				# Path of the picture/photo
	$argazkiIzena = 		$_FILES['Argazk']['name']; 					# Name of the photo:
	$bukaeraHelbidea = 		$serbitzarikoHelbidea.'/'.$argazkiIzena; 	# Save the final path. 
	move_uploaded_file($helbideTemporala,$bukaeraHelbidea); 			# Make a copy of the photo. 
	
	#insert the new product
	mysqli_query($link,"INSERT INTO product (id_Product, Name, Price, Description, Picture) VALUES ('$ID', '$name', '$price', '$description','$bukaeraHelbidea' )");
	
	
	#close the connection
	mysqli_close($link);
	
	echo'<br><br><br>';
	echo'<a href="webWorkers.php"> Go Back </a>';
?>