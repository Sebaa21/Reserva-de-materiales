<?php

    include("../db.php");

    if (!empty($_POST["Registrar"])) {
        if (empty($_POST["Nombres"]) or empty($_POST["Apellidos"]) or empty($_POST["Correo"]) or empty($_POST["Password"]) or empty($_POST["Cargo"])) {
        
        } else {
            $nombre = $_POST['Nombres'];
            $apellido = $_POST['Apellidos'];
            $correo = $_POST['Correo'];
            $password = $_POST['Password'];
            $cargo = $_POST['Cargo'];

            $sql = $conn->query(" INSERT INTO datos_usuarios(Nombres, Apellidos, Correo, Password, Cargo) VALUES ('$nombre', '$apellido', '$correo', '$password', '$cargo')");
            if ($sql==1) {
                
                header("Location: ../login/login.php");
            }
        }
    }
?>