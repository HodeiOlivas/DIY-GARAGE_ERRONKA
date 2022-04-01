<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>DB see Beers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div class="container d-flex justify-content-center mt-5">
		<div id='karratua' class="row col-lg-6">
			<H1>Garagardo datu basea</H1>
			<?php
			include("connect_db.php");
			$link = connectDataBase();
			$result = mysqli_query($link, "select * from beers");
			?>
			<table class='mt-5 table' BORDER=2>
				<thead>
					<tr>
						<th scope="col">&nbsp;ID</th>
						<th scope="col">&nbsp;Name</th>
						<th scope="col">&nbsp;Picture</th>
						<th scope="col">&nbsp;Brewery ID</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
						<?php
						while ($erregistroa = mysqli_fetch_array($result)) {
							printf("<tr><td>&nbsp;%d</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%d&nbsp;</td></tr>", $erregistroa["id"], $erregistroa["name"],  $erregistroa["picture"],  $erregistroa["breweryID"]);
						}
						mysqli_free_result($result);
						mysqli_close($link);
						?>
						
					</tr>
				</tbody>
			</table>
			<button class='col-lg-2'><a href='index.html'>HOME</a></button>
		</div>
		
	</div>
</body>

</html>