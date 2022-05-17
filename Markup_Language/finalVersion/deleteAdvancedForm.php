<html>
	<head>
		<link rel="STYLESHEET" TYPE="TEXT/CSS" HREF="style_php.CSS">      
		<title>PHPren adibidea</title>
        <style>
            #argazkia{
                height: 100px;
                width: 100px;
            }
        </style>
	</head>
	<body>
		<H1>EZABATU LANGILE BAT</H1>
		<?php
			include("test_connect_db.php");
			$link=connectDataBase();
			
			$emaitza=mysqli_query($link,"select * from purchase");
			
		?>



		<TABLE BORDER=1 >
			<Tr>
				<Th>&nbsp;Langilearen identifikatzailea</Th><Th>&nbsp;Langilearen izena&nbsp;</Th><Th>&nbsp;Ezabatu&nbsp;</Th>
			</Tr>
			<?php
				while($erregistroa = mysqli_fetch_array($emaitza))
				{
					printf("<tr>
								<td>%d</td>
								<td>%s</td>
								<td>%s</td>
								<td>%s</td>
								<td>%d</td>
								<td>%.2f</td>
                    
                    </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5]);
				}
				mysqli_free_result($emaitza);
				mysqli_close($link);
			?>
		</table>


	</body>
</html>
