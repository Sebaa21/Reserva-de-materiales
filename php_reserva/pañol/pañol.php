<?php

session_start();
error_reporting(0);

$validar = $_SESSION['Email'];

if( $validar == null || $validar = ''){

  header("Location: ../login/login.php");
  die();
  
}


?>

<?php include ('../pañol/header_pañol.php') ?>

<div class="card">
    <div class="card-body">
    <h1 class="text-center mt-3 mb-5">Pañol</h1>
        <div class="btn-group-vertical d-grid gap-1 col-6 mx-auto">
            <a class="btn btn-success mb-3 btn-lg" href="../pañol/stock.php" role="button">Stock de Materiales</a>
            <a class="btn btn-primary mb-3 btn-lg" href="../pañol/historial.php" role="button">Historial de Retiros</a>
            <a class="btn btn-info mb-3 btn-lg" href="../pañol/solicitudes.php" role="button">Materiales Solicitados</a>
            <a class="btn btn-warning mb-3 btn-lg" href="../pañol/usuarios.php" role="button">Usuarios Registrados</a>
            <a class="btn btn-secondary mb-3 btn-lg" href="../pañol/estado.php" role="button">Estado de Materiales</a>
            <a class="btn btn-danger mb-3 btn-lg" href="../login/index.php" role="button">Salir</a>
        </div>
    </div>
</div>

<?php include ('../pañol/footer_pañol.php') ?>