<?php
session_start();

if (!empty($_POST["iniciar"])) {
    if (!empty($_POST["nombre "]) and !empty($_POST["apellido"])) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $fecha_registro = $_POST["fecha_registro"];
        $correo = $_POST["correo"];

        $sentencia = "SELECT * FROM registro WHERE nombre= '$correo' AND apellido = '$nombre'";
        $sql = $mysqli -> query($sentencia);
        if ($dato = $sql -> fetch_object()) {
            
            $_SESSION["id"] = $dato -> id;
            $_SESSION["nombre"] = $dato -> nombre;
            $_SESSION["apellido"] = $dato -> apellido;
            $_SESSION["fecha _registo"] = $dato -> fecha_registro;
            $_SESSION["correo"] = $dato -> correo;



            header("location:index.php");
        } else {
            echo '
                <div class="alert alert-danger text-center">
                    Correo/Contraseña incorrectos
                </div>
            ';
        }
    } else {
        echo '
            <div class="alert alert-warning text-center">
                Llena todo el formulario
            </div>
        ';
    }
}
