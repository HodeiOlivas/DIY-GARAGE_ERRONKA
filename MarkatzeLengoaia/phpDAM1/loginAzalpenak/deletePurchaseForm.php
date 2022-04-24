<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <title>Delete Purchase</title>


</head>

<body>


    <div style="margin:auto;width:100%;margin-top:30px;">
        <br><br><br><br><br><br><br><br>
        <hr />
    </div>


    <div style='width:600px;float:right;margin-top:25px; margin-right:300px'>
        <!-- style='margin:auto;width:600px;margin-top:50px;' -->
        <p>dwdq</p>
        <h1>Delete a purchase</h1>
        <!--<form action="insertNewPurchase.php" method="POST"> -->
        <form action="deletePurchase.php" method="POST">
            <table>
                <tr>
                    <td>Your username:</td>
                    <td><input name="username" type="text" size='4'><br></td>
                </tr>
                <tr>
                    <td>Date Original:</td>
                    <td><input name="datePurchase" type="text" size='4'><br></td>
                </tr>
                <tr>
                    <td>Purchase's Date:</td>
                    <td><input id="datepicker" type="date" name="purchaseDate" placeholder="specify date" class="formAlign" style="display: table-cell;" /></td>
                </tr>
                <tr>
                    <td>Purchase's Code:</td>
                    <td><input name="date" type="number" size="4"><br></td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <input name="send" type="submit" value="DELETE">
                    </td>
                    <td>
                        <br>
                        <input type="reset" value="CLEAR">
                    </td>
                    <td>
                        <br>
                        <button onclick=location.href="webErabiltzaileak.php">GO BACK</button>
                    </td>
                </tr>
                <!-- echo "Today is " . date("Y-m-d") . "<br>"; -->
            </table>
        </form>
    </div>

    <pre>
        <br>
        <br>
        <br>
    </pre>


</body>

</html>