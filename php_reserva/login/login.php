<?php include ("../db.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reserva de materiales DuocUC</title>
    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- our project just needs Font Awesome Solid + Brands -->
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
</head>
<body class="container">
<nav class="navbar navbar navbar-dark bg-dark navbar-expand-lg bg-light">
<div class="container">
            <div class="row">
                <div class="col">
                    <img src="../img/logo-duoc-1.jpg" class="img-fluid p-2" width="250" alt="...">
                </div>
            </div>
            <a class="navbar-brand" href="#">Sede Antonio Varas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
</div>
</nav>
<div class="container">
    <form action="../login/validar.php" method="POST">
        <h1 class="mt-3 mb-4">Reserva de materiales </h1>
        <div class="col-5 mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
            <input type="email" name="Email" class="form-control" id="exampleInputEmail1" required>
        </div>
        <div class="col-5 mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" name="Password" class="form-control" id="exampleInputPassword1" required>
            <p class="mt-2">¿Olvido su contraseña? <a href="password.php">Restablecer</a></p>
        </div>
        <input type="submit" class="btn btn-primary mb-3 btn-lg" name="Ingresar" value="Ingresar"> 
        <p class="mt-2">¿No posee cuenta? <a href="registro.php">Registrese aqui</a></p>
    </form>
</div>
<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>