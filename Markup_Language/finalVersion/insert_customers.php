<html>

<body>
	<?php

	include("test_connect_db.php");
	session_start();
	$link = connectDataBase();

	$username = $_POST['newUsername'];
	$name = $_POST["newName"];
	$surname = $_POST["newSurname"];
	$password = $_POST["newPassword"];
	$birthday = $_POST["newBirthday"];
	$email = $_POST["newEmail"];
	$phonenumber = $_POST["newPhonenumber"];

	//check if the username already exists
	$emaitza = mysqli_query($link, "insert into customer (Username, Name, Surname, Password, Birthday, Mail, Phone_Number) 
			values('$username','$name','$surname','$password','$birthday','$email','$phonenumber')");



	// $emaitza = mysqli_query($link, "insert into customer(Username,Name,Surname,Password,Birthday,Mail,Phone_Number) 
	// values('$username','$name','$surname','$password','$birthday','$email','$phonenumber' )");


	session_start();
	$_SESSION['usuario'] = $username;
	header("Location: webCustomersFinal.php?correct=si");


	?>

	<!--   <meta http-equiv="refresh" content="0;url=kontsultatu-erabiltzaileak.php"> -->
</body>

</html>