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
        $photo = $_POST['argazkia'];
        $breID =  $_POST['breID'];

        include("connect_db.php");
        $link = connectDataBase();
        $result = "INSERT INTO beers (id, name, picture, breweryID)
                VALUES ($ID, '$name', '$photo', $breID )";
        
        if (mysqli_query($link, $result)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $result . "<br>" . mysqli_error($link);
        }
        mysqli_close($link); //zelan itxi ahal da ez egoteko arazorik
        ?>
    <br/>
    <button><a href='index.html'>HOME</a></button>
</body>

</html>