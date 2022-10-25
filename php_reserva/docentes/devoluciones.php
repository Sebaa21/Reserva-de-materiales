<?php include ('../db.php') ?>

<?php include ('../docentes/header_docentes.php') ?>

<div class="card">
    <div class="card-body">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <h1 class="navbar-brand" href="#">Devolucion de Materiales</h1>
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
        <div>
            <a class="btn btn-success mb-3 btn-lg" href="../docentes/solicitar_nuevo.php" role="button">Solicitar Nuevo Material</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<?php include ('../docentes/footer_docentes.php') ?>