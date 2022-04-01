<html>

<head>
	<link rel="STYLESHEET" TYPE="TEXT/CSS" HREF="style_php.CSS">
	<title>PHP Example</title>
</head>

<body>
	<H1>Nire lehen PHP fitxategia MySql databaseekin</H1>
	<?php
	include("test_connect_db.php");
	$link = connectDataBase();
	$result = mysqli_query($link, "select * from customer");
	?>
	<TABLE BORDER=1>
		<Tr>
			<Th>&nbsp;Langilearen identifikatzailea</Th>
			<Th>&nbsp;Langilearen izena&nbsp;</Th>
		</Tr>
		<?php
		while ($erregistroa = mysqli_fetch_array($result)) {
			printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td></tr>", $erregistroa["Username"], $erregistroa["Name"]);
		}
		mysqli_free_result($result);
		mysqli_close($link);
		?>
	</table>
</body>

</html>