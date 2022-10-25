<?php include ('../db.php') ?>

<?php include ('../pañol/header_pañol.php') ?>

<div class="card">
    <div class="card-body">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <h1 class="navbar-brand" href="#">Stock de Materiales</h1>
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

<div class="card">
    <div class="card-body">
    <h5 class="mt-2">Agregar Nuevo Material</h5>
        <div class="container p-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body">
                        <form action="../datos/datos_stock.php" method="POST">
                            <div class="form-group mb-3">
                                <input type="text" name="Nombre" class="form-control" placeholder="Nombre del producto" autofocus="autofocus">
                                <input type="text" name="Cantidad" class="form-control mt-3" placeholder="Cantidad requerida" autofocus="autofocus">
                                <input class="form-control mt-3" name="Imagen" type="file">
                            </div>
                            <div>
                                <input type="submit" class="btn btn-success btn-block" name="Agregar" value="Agregar Material"> 
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="col-md-8">
            <table class="table table-bordered table table-success table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Cantidad</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stock = "SELECT * FROM datos_stock";
                    $result_stock = mysqli_query($conn, $stock);

                    while($row = mysqli_fetch_array($result_stock)) { ?>
                        <tr>
                            <td><?php echo $row['Nombre'] ?></td>
                            <td><?php ?></td>
                            <td><?php echo $row['Cantidad'] ?></td>
                            <td>
                                <a class="btn btn-success " href="../pañol/editar.php?id=<?php echo $row['id']?>">
                                Editar
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="../pañol/delete.php?id=<?php echo $row['id']?>">
                                Eliminar
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include ('../pañol/footer_pañol.php') ?>