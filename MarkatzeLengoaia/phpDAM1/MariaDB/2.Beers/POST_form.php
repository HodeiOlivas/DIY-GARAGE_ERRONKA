<!DOCTYPE html>
<html>

<head>
    <title>Autoak Bootstrap PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style_php.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
        $ID =  $_POST['ID'];
        $name = $_POST['name'];
        
        $serbitzarikoHelbidea = 'images/DB'; 							# Karpeta sortu "Argazkiak", honen barruan beste bat "DB". 
        $helbideTemporala = 	$_FILES['argazkia']['tmp_name']; 				# Argazkiaren helbidea:
        $argazkiIzena = 		$_FILES['argazkia']['name']; 					# Argazki izena:
        $bukaeraHelbidea = 		$serbitzarikoHelbidea.'/'.$argazkiIzena; 	# Bukaerako helbidearen helbidea gorde. 
        move_uploaded_file($helbideTemporala,$bukaeraHelbidea); 			# Argazkiaren kopia bat egin "Argazkiak/DB" karpetan. 

        // $photo = $_POST['argazkia'];

        $breID =  $_POST['breID'];

        // include("connect_db.php");
        // $link = connectDataBase();
        include("test_connect_db.php");
        $link = Konektatzea();

        // $result = "INSERT INTO beers (id, name, picture, breweryID) VALUES ($ID, '$name', '$photo', $breID )";
        $result = "INSERT INTO beers (id, name, picture, breweryID) VALUES ($ID, '$name', '$bukaeraHelbidea', $breID )";
        
        if (mysqli_query($link, $result)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $result . "<br>" . mysqli_error($link);
        }
        mysqli_close($link); //zelan itxi ahal da ez egoteko arazorik

        #Konexioa itxi
        mysqli_close($link);
        
        echo'<br><br><br>';
        echo'<a href="Bistaratu.php"> Bistaratu </a>';

        ?>
    <br/>
    <button><a href='index.html'>HOME</a></button>
</body>

</html>