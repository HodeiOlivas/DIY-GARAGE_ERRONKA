<?php 
	# Konekzioa egin
	include("test_connect_db.php");
	$link=Konektatzea();


	# Kontsulta egin
		$kontsulta=mysqli_query($link,"select * from igoirudiak");
		# Datu Basetik Kontsultatzen dituen argazki guztien helbideak lortu
		
		
			while($filak=mysqli_fetch_array($kontsulta))
			{
				$helbidea=$filak['Argazkia'];
?>
<!-- Irudia txertatu -->
	<img src="<?php echo $helbidea; ?>" width="180" height="214"><br>
<?php 
			} # while bukatu
			
			
			
	echo'<br>';
	#Konexioa itxi
	mysqli_close($link);
	
	echo'<br><br><br>';
	echo'<a href="Argazkiak_formularioa.html"> Beste bat gehitu </a>';

?>

