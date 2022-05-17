<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style_php.css">
    <title>Insert New Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container d-flex justify-content-center mt-5">
        <div id='karratua' class="row col-lg-6">
            <h1>Insert New Product</h1>

            <div class="container mt-5 mb-5">
                <form action="uploadImg.php" method="post" enctype="multipart/form-data">
                    <div class="form-group mt-5">
                        <label class="col-sm-2">Product ID:</label>
                        <input class="col-sm-1" type="text" id="ID" name="productID" required> *</br>
                    </div>
                    <div class="form-group mt-3">
                        <label class="col-sm-2">Name:</label>
                        <input class="col-sm-4" type="text" id="name" name="nameProd"></br>
                    </div>
                    <div class="form-group mt-3">
                        <label class="col-sm-2">Price:</label>
                        <input class="col-sm-4" step="0.01" type="text" id="price" name="priceProd"></br>
                    </div>
                    <div class="form-group mt-3">
                        <label class="col-sm-2">Description:</label>
                        <input class="col-sm-4" type="text" id="description" name="descriptionProd"></br>
                    </div>
                    <div class="form-group mt-3">
                        <input type="file" id="Argazk" name="Argazk"/></br>
                        <input type="submit" id="Botoia" value="Bidali" />
                        <br>
                    </div>
                </form>
                <!-- <form action="uploadImg.php" method="post" id="Form" enctype="multipart/form-data" /*<-- Derrigorrezkoa da.*/>
                    <div class="form-group mt-3">
                        <input type="file" id="Argazk" name="Argazk"/></br>
                        <input type="submit" id="Botoia" value="Bidali" />
                        <br>
                    </div>
                </form> -->
                <br />
                <!-- <button><a href='webWorkers.php'>HOME</a></button> -->
            </div>
        </div>
    </div>
</body>

</html>