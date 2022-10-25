<?php include ('../db.php') ?>

<?php include ('../pañol/header_pañol.php') ?>

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
            <table class="table table-bordered table table-info table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Sala</th>
                        <th>Horario</th>
                        <th>Material_1</th>
                        <th>C1</th>
                        <th>Material_2</th>
                        <th>C2</th>
                        <th>Material_3</th>
                        <th>C3</th>
                        <th>Material_4</th>
                        <th>C4</th>
                        <th>Material_5</th>
                        <th>C5</th>
                        <th>Proceso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM datos_reserva";
                    $result_reserva = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_reserva)) { ?>
                        <tr>
                            <td><?php echo $row['Nombre'] ?></td>
                            <td><?php echo $row['Sala'] ?></td>
                            <td><?php echo $row['Horario'] ?></td>
                            <td><?php echo $row['Material_1'] ?></td>
                            <td><?php echo $row['C1'] ?></td>
                            <td><?php echo $row['Material_2'] ?></td>
                            <td><?php echo $row['C2'] ?></td>
                            <td><?php echo $row['Material_3'] ?></td>
                            <td><?php echo $row['C3'] ?></td>
                            <td><?php echo $row['Material_4'] ?></td>
                            <td><?php echo $row['C4'] ?></td>
                            <td><?php echo $row['Material_5'] ?></td>
                            <td><?php echo $row['C5'] ?></td>
                            <td><div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                Entregado
                                </label>
                                </div></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include ('../pañol/footer_pañol.php') ?>