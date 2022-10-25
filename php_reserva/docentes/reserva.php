<?php include ('../db.php') ?>

<?php include ('../docentes/header_docentes.php') ?>

<div class="card">
    <div class="card-body">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <h1 class="navbar-brand" href="#">Reserva de Materiales</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../docentes/docentes.php"><-- Volver</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form action="../datos/datos_reserva.php" method="POST">
            <div class="form-group col-6 mb-3">
                <input type="text" name="Nombre" class="form-control mt-3" placeholder="Ingrese su Nombre y Apellido" autofocus="autofocus">
                <input type="text" name="Sala" class="form-control mt-3" placeholder="Ingrese Sala" autofocus="autofocus">
                <input type="text" name="Horario" class="form-control mt-3" placeholder="Ingrese Hora de clase (Hh:Mm-Hh:Mm dd/mm/aa)" autofocus="autofocus">
            <div class="input-group mt-3 mb-3">
                <input type="text" name="Material_1" class="form-control" placeholder="Ingrese material 1">
                <span class="input-group-text">Cantidad</span>
                <input type="text" name="C1" class="form-control" placeholder="Ingrese Cantidad">
            </div>
            <div class="input-group mb-3">
                <input type="text" name="Material_2" class="form-control" placeholder="Ingrese material 2">
                <span class="input-group-text">Cantidad</span>
                <input type="text" name="C2" class="form-control" placeholder="Ingrese Cantidad">
            </div>
            <div class="input-group mb-3">
                <input type="text" name="Material_3" class="form-control" placeholder="Ingrese material 3">
                <span class="input-group-text">Cantidad</span>
                <input type="text" name="C3" class="form-control" placeholder="Ingrese Cantidad">
            </div>
            <div class="input-group mb-3">
                <input type="text" name="Material_4" class="form-control" placeholder="Ingrese material 4">
                <span class="input-group-text">Cantidad</span>
                <input type="text" name="C4" class="form-control" placeholder="Ingrese Cantidad">
            </div>
            <div class="input-group mb-3">
                <input type="text" name="Material_5" class="form-control" placeholder="Ingrese material 5">
                <span class="input-group-text">Cantidad</span>
                <input type="text" name="C5" class="form-control" placeholder="Ingrese Cantidad">
            </div>
            </div>
        <div class="col-12 mt-4">
            <input type="submit" class="btn btn-primary btn-block" name="Reservar" value="Registrar">
        </div>
        </form>
    </div>
  </div>
</div>

<?php include ('../docentes/footer_docentes.php') ?>