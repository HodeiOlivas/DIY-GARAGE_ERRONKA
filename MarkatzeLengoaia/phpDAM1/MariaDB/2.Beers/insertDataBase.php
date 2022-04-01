<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style_php.css">
    <title>DB insert beers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container d-flex justify-content-center mt-5">
        <div id='karratua' class="row col-lg-6">
            <h1>Garagardo sartu</h1>

            <div class="container mt-5 mb-5">
                <form action="POST_form.php" method="post">
                    <h3>Formularioa</h3>
                    <div class="form-group mt-5">
                        <label class="col-sm-2">ID:</label>
                        <input class="col-sm-1" type="number" id="ID" name="ID" required> *</br>
                    </div>
                    <div class="form-group mt-3">
                        <label class="col-sm-2">Izena:</label>
                        <input class="col-sm-4" type="text" id="name" name="name"></br>
                    </div>
                    <div class="form-group mt-3">
                        <label class="col-sm-2">Argazkia:</label>
                        <input class="col-sm-8" type="file" accept="image/png, image/jpeg" name="argazkia"></br>
                    </div>
                    <div class="form-group mt-3">
                        <label class="col-sm-2">Brewery ID:</label> 
                        <input class="col-sm-1" type="number" id="breID" name="breID"></br>
                    </div>
                    <div class="mt-3">
                        <input type="submit">
                        <input type="reset">
                    </div>
                </form>
                <br />
                <button><a href='index.html'>HOME</a></button>
            </div>
        </div>
    </div>
</body>

</html>