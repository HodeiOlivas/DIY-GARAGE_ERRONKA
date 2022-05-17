<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="STYLESHEET" TYPE="TEXT/CSS" HREF="style_php.CSS">
	<title>Manage Your Cart</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style='margin:auto;width:600px;margin-top:100px;'>


	<?php
	include("test_connect_db.php");
	session_start();
	$link = connectDataBase();
	$prodID = $_GET["prodIdentifier"];
	echo $prodID;
	$currentUser = $_SESSION['usuario'];
	$todaysDate = date("Y-m-d");
	$defaultAmount = 1;

	//CET THE PRICE OF THE SELECTED PRODUCT
	$price = mysqli_query($link, "SELECT Price FROM product WHERE id_Product = '$prodID'");
	$price_Prod = mysqli_fetch_assoc($price);
	$final_Cost = ((float)$price_Prod['Price']);


	// $link = connectDataBase();
	$emaitza = mysqli_query($link, "insert into purchase (cust_Username, prod_ID, Date, Amount, Final_Cost) 
		values ('$currentUser', '$prodID', '$todaysDate', '$defaultAmount', '$final_Cost')");
	$kontsulta = mysqli_query($link, "select * from purchase where Date = '$todaysDate'");

	// $kontsultDelete = mysqli_query($link,"select * from purchase");

	// $messageAfterDeletePurchase = "The specified purchase has been successfully deleted.";
	// echo "<script type='text/javascript' href='webErabiltzaileak.php'>alert('$messageAfterDeletePurchase');</script>";

	echo ("<script LANGUAGE='JavaScript'>
				window.alert('The specified product has been added to the cart like a new .');
    			
    		</script>");

	// window . location . href = 'webErabiltzaileak.php';

	?>


	<?php
	header("Location: webCustomersFinal.php");
	?>

</body>

</html>


<!-- 
	$messageAfterDeletePurchase = "The specified purchase has been successfully deleted.";
	echo "<script type='text/javascript'>alert('$messageAfterDeletePurchase');</script>"; 
-->