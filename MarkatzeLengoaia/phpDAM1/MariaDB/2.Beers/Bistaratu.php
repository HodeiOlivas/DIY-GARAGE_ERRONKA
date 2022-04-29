<?php 
	# Konekzioa egin
	include("test_connect_db.php");
	$link=Konektatzea();


	# Kontsulta egin
		$kontsulta=mysqli_query($link,"select * from beers");
		# Datu Basetik Kontsultatzen dituen argazki guztien helbideak lortu
		
		
			while($filak=mysqli_fetch_array($kontsulta))
			{
				printf("<tr>
							<td>%d</td>
							<td>%s</td>
							<td><img src=%s width='180' height='214'><br></td>
							<td>%d</td>
						</tr>", $filak[0], $filak[1], $filak[2], $filak[3]);
				$helbidea=$filak['picture'];
?>
<!-- Irudia txertatu -->
	<!-- <img src="<?php echo $helbidea; ?>" width="180" height="214"><br> -->
<?php 
			} # while bukatu
			
			
			
	echo'<br>';
	#Konexioa itxi
	mysqli_close($link);
	
	echo'<br><br><br>';
	echo'<a href="index.html"> Beste bat gehitu </a>';

?>

