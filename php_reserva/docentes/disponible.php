<?php include ('../db.php') ?>

<?php include ('../docentes/header_docentes.php') ?>

<div class="card">
    <div class="card-body">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <h1 class="navbar-brand" href="#">Disponibilidad de Materiales</h1>
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
        <div class="col-md-8">
            <table class="table table-bordered table table-success table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM datos_stock";
                    $result_stock = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_stock)) { ?>
                        <tr>
                            <td><?php echo $row['Nombre'] ?></td>
                            <td><?php  ?></td>
                            <td><?php echo $row['Cantidad'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include ('../docentes/footer_docentes.php') ?>