<html>

<head>
    <link rel="STYLESHEET" TYPE="TEXT/CSS" HREF="style_php.CSS">
    <title>Delete Product From Catalog</title>
</head>

<body>


    <?php
    include("test_connect_db.php");
    $idProductCatalogDelete = $_GET["productDeleteIdentifier"];

    $link = connectDataBase();
    $emaitza = mysqli_query($link, "delete from product where id_Product = '$idProductCatalogDelete'");
    $kontsulta = mysqli_query($link, "select * from product");

    echo ("<script LANGUAGE='JavaScript'>
    		window.alert('The specified product has been successfully deleted from the catalog.');
    	</script>");

    ?>
    <table class="table table-dark" style="text-align:center; width:auto; margin-left:auto; margin-right:auto;">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Picture</th>
                <th>Manage</th>
            </tr>
        </thead>
        <?php
        while ($erregistroa = mysqli_fetch_array($kontsulta)) {
            printf("<tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%.2f</td>
                        <td style='text-align:left'>%s</td>
                        <td><img src=%s width='200' height='120'><br></td>
                        <td>
                          <a href='deleteProduct.php?productDeleteIdentifier=%s'>
                            <img src='../finalVersion/img/deleteImage.png' width='75px' height='23px' align='center'></img>
                          </a>
                          
                        </td>
                    </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa['id_Product']);
        }
        mysqli_free_result($kontsulta);
        //mysqli_close($link);
        ?>

        <!-- </thead> -->
    </table>

    <a href="webWorkers.php">Go back</a>

    <?php
    //header("Location: webWorkers.php");
    //header("Location: webErabiltzaileak.php");
    ?>

</body>

</html>


<!-- 
	$messageAfterDeletePurchase = "The specified purchase has been successfully deleted.";
	echo "<script type='text/javascript'>alert('$messageAfterDeletePurchase');</script>"; 
-->