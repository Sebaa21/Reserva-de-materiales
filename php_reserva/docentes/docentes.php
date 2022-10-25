<?php

session_start();
error_reporting(0);

$validar = $_SESSION['Email'];

if( $validar == null || $validar = ''){

  header("Location: ../login/login.php");
  die();
  
}


?>

<?php include ('../docentes/header_docentes.php') ?>

<div class="card">
    <div class="card-body">
    <h1 class="text-center mt-3 mb-5">Docentes</h1>
        <div class="btn-group-vertical d-grid gap-1 col-6 mx-auto">
            <a class="btn btn-success mb-3 btn-lg" href="../docentes/disponible.php" role="button">Material Disponible</a>
            <a class="btn btn-primary mb-3 btn-lg" href="../docentes/reserva.php" role="button">Reservas</a>
            <a class="btn btn-warning mb-3 btn-lg" href="../docentes/devoluciones.php" role="button">Devolucion de Materiales</a>
            <a class="btn btn-danger mb-3 btn-lg" href="../login/index.php" role="button">Salir</a>
        </div>
    </div>
</div>
<?php include ('../docentes/footer_docentes.php') ?>