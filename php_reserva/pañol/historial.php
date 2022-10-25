<?php include ('../db.php') ?>

<?php include ('../pañol/header_pañol.php') ?>

<div class="card">
    <div class="card-body">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <h1 class="navbar-brand" href="#">Historial de Reservas</h1>
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
        <div class="container col-md-6">
            <form class="d-flex">
			    <form action="#" method="GET">
                <select name="searchBy" id="">
                        <option value="">Escoja una Opcion</option>
                        <option value="Nombre">Busqueda por nombre</option>
                        <option value="Sala">Busqueda por sala</option>
                        <option value="Horario">Busqueda por horario</option>
                        <option value="Material_1">Busqueda por material</option>
                        <option value="Registro">Busqueda por registro</option>
                </select>
			    <input class="form-control me-2" type="search" placeholder="Buscar en Historial..." name="busqueda"> <br>
			    <button class="btn btn-outline-dark" type="submit" name="enviar"> <b>Buscar </b> </button> 
			</form>
        </div>
        <br>
        <div class="col-md-8">
            <table class="table table-bordered table table-primary table-striped" id="Buscar">
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
                        <th>Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $searchBy = $_GET['searchBy'] ?>
                    <?php $searchValue = $_GET['busqueda'] ?>
                    <?php "SELECT * FROM datos_reserva WHERE Nombre LIKE '" . $searchValue. "', Sala LIKE '" . $searchValue. "', Horario LIKE '" . $searchValue. "', Material_1 LIKE '" . $searchValue. "', Registro LIKE '" . $searchValue. "' "?>
                    <?php
                    $isFiltering = !is_null($searchBy) && strlen($searchValue) > 0;
                    if (!$isFiltering) {
                        $query = "SELECT * FROM datos_reserva";
                    } elseif ($isFiltering && $searchBy == "Nombre") {
                        $query= "SELECT * FROM datos_reserva WHERE UPPER(Nombre) LIKE '" . strtoupper($searchValue) . "%'";
                    } elseif ($isFiltering && $searchBy == "Sala") {
                        $query= "SELECT * FROM datos_reserva WHERE UPPER(Sala) LIKE '" . strtoupper($searchValue) . "%'";
                    } elseif ($isFiltering && $searchBy == "Horario") {
                        $query= "SELECT * FROM datos_reserva WHERE UPPER(Horario) LIKE '" . strtoupper($searchValue) . "%'";
                    } elseif ($isFiltering && $searchBy == "Material_1") {
                        $query= "SELECT * FROM datos_reserva WHERE UPPER(Material_1) LIKE '" . strtoupper($searchValue) . "%'";
                    } elseif ($isFiltering && $searchBy == "Registro") {
                        $query= "SELECT * FROM datos_reserva WHERE UPPER(Registro) LIKE '" . strtoupper($searchValue) . "%'";
                    }


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
                            <td><?php echo $row['Registro'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include ('../pañol/footer_pañol.php') ?>