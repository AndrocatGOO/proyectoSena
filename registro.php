<?php
    // Conexión con la base de datos y el servidor.
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $link = mysqli_connect($servidor, $usuario, $clave, "proyectosena");    

    if(!$link) {
        echo 'Error en la conexión al servidor.';
    }

    // Obtener los valores del formulario.
    $nombre = $_POST['firstName'];
    $apellido = $_POST['lastName'];
    $correo = $_POST['emailAdress'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];    

    // Obtiene la longitud de un string.
    $req = (strlen($nombre) * strlen($apellido) * strlen($correo) * strlen($password1) * strlen($password2)) or die("<h2>No se han llenado todos los campos.</h2>");

    // Confirmación de la contraseña.
    if ($password1 != $password2) {
        die("Las contraseñas no coinciden.");
    }

    // Encriptación de la contraseña.

    $password = md5($password1);

    // Ingresar la información a la tabla de datos.
    $insertData = "INSERT INTO usuarios VALUES('', '$nombre', '$apellido', '$correo', '$password')";

    $runRecord = mysqli_query($link, $insertData);

    echo '<h2>Registro completo del producto.</h2>';

    if (!$runRecord) {
        echo '<h2>Error al insertar datos del producto.</h2>';
    }
?>