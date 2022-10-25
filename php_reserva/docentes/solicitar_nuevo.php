<?php include ('../db.php') ?>

<?php include ('../docentes/header_docentes.php') ?>

<div class="card">
    <div class="card-body">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <h1 class="navbar-brand" href="#">Materiales Solicitados</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../docentes/devoluciones.php"><-- Volver</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="container p-1">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <form action="#">
                            <div class="form-group">
                                <label for="inputName" class="form-label">Nombre de Material</label>
                                <input type="text" name="nombre" id="inputName" class="form-control" placeholder="Nombre..." autofocus="autofocus">
                                <label for="inputName" class="form-label mt-3">Cantidad Requerida</label>
                                <input type="text" name="cantidad" id="inputName" class="form-control" placeholder="Cantidad..." autofocus="autofocus">
                                <label for="formFile" class="form-label mt-3">Seleccione una imagen referencial</label>
                                <input class="form-control" type="file" id="formFile">
                                <a class="btn btn-success mt-3 btn-lg" href="../docentes/devoluciones.php" role="button">Solicitar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ('../docentes/footer_docentes.php') ?>