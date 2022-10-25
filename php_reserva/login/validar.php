<?php

    include("../db.php");

    if (isset($_POST['Ingresar'])) {
        $email = $_POST['Email'];
        $pass = $_POST['Password'];
        session_start();
        $_SESSION['Email']=$email;

        $conn = mysqli_connect("localhost", "root", "", "php_reserva");
        $iniciar = "SELECT * FROM datos_usuarios WHERE Correo='$email' AND Password='$pass'";
        $result = mysqli_query($conn, $iniciar);
        $filas = mysqli_fetch_array($result);

        if ($filas['Cargo'] == 1){ //Docentes

            header("Location: ../docentes/docentes.php");

        }else if ($filas['Cargo'] == 2){ //pañol

            header("Location: ../pañol/pañol.php");
    }


    else {

        header("Location: ../login/login.php");
        session_destroy();

    }

}

?>