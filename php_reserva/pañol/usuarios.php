<?php include ('../db.php') ?>

<?php include ('../pañol/header_pañol.php') ?>

<div class="card">
    <div class="card-body">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <h1 class="navbar-brand" href="#">Usuarios Registrados</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../pañol/pañol.php"><-- Volver</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </div>
</div>

<br>
<div class="card">
    <div class="card-body">
        <div class="col-md-8">
            <table class="table table-bordered table table-warning table-striped">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Cargo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM datos_usuarios";
                    $result_reserva = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_reserva)) { ?>
                        <tr>
                            <td><?php echo $row['Nombres'] ?></td>
                            <td><?php echo $row['Apellidos'] ?></td>
                            <td><?php echo $row['Correo'] ?></td>
                            <td><?php echo $row['Cargo'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <h6>(Cargo = Referidos al cargo: 1=Docentes / 2=Pañol)</h6>
        </div>
    </div>
</div>

<?php include ('../pañol/footer_pañol.php') ?>