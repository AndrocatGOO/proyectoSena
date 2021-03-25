<?php
    // Conexión con la base de datos y el servidor.
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dataBase = "proyectosena";
    $link = mysqli_connect($servidor, $usuario, $clave, $dataBase);    

    if(!$link) {
        echo 'Error en la conexión al servidor.';
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Página para comprar piedras semi-preciosas.">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos/inventario.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
        <title>Piedras semi-preciosas</title>
    </head>
    <body>
        <div class="container">

            <div class="header">
                <header>
                    <div class="nav">
                        <nav>
                            <h1>Stocktaking</h1>
                        </nav>
                    </div>
                </header>
            </div>

            <div class="productList">
                <h2>Product List</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id Product</th>
                            <th scope="col">Category</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT * FROM productos";
                        $runQuery = mysqli_query($link, $sql);
                        $numRows = mysqli_num_rows($runQuery);
                        $rows = mysqli_fetch_array($runQuery);

                        if (!$runQuery) {
                            echo 'Error en la consulta';
                        } else {
                            if ($numRows < 1) {
                                echo "<tr><td>Sin registros</td><tr>";
                            } else {
                                for ($i = 0; $i <= $rows; $i++) { 
                                echo "<tr><td>$rows[0]</td>
                                        <td>$rows[1]</td>
                                        <td>$rows[2]</td>
                                        <td>$rows[3]</td>
                                        <td>$rows[4]</td>
                                        <td>$rows[5]</td>
                                    </tr>";
                                    $rows = mysqli_fetch_array($runQuery);
                                }    
                            }
                        }

                    ?>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary" id="newProduct" name="checkIn">New Product</button>
            </div>
            <br>
            <h2>Nuevo Producto</h2>
            <form action="#" class="formularioProducto" method="POST">
                <div class="form-group">
                    <label for="productCategory">Select Category</label>
                    <select class="form-control" id="productCategory" name="productCategory">
                        <option>Piedras Semi-Preciosas</option>
                        <option>Collares</option>
                        <option>Aretes</option>
                        <option>Proteinas</option>
                        <option>Otros</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="productName">
                </div>
                <div class="form-group">
                    <label for="productPrice">Product Price</label>
                    <input type="text" class="form-control" id="productPrice" name="productPrice">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock">
                </div>
                <div class="form-group">
                    <label for="description">Product description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="formularioProductos">Submit</button>
            </form>

        </div>

        <div class="footer">
            <hr>
            <footer></footer>
            <br>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
</html>


<?php

    if (isset($_POST['formularioProductos'])) {
        echo 'Se activo el formulario sin llenar los valores.';
        // Obtener los valores del formulario.
        $category = $_POST['productCategory'];
        $nombre = $_POST['productName'];
        $precio = $_POST['productPrice'];
        $stock = $_POST['stock'];
        $description = $_POST['description'];    

        // Ingresar la información a la tabla de datos.
        $insertData = "INSERT INTO productos VALUES('', '$category', '$nombre', '$precio', '$stock', '$description')";

        $runRecord = mysqli_query($link, $insertData);

        echo '<h2>Registro Completo.</h2>';

        if (!$runRecord) {
            echo '<h2>Error al insertar datos.</h2>';
        }
    }
?>