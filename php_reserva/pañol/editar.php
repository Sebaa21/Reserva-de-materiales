<?php

    include("../db.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $editar = "SELECT * FROM datos_stock WHERE id = $id";
        $result = mysqli_query($conn, $editar);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombre = $row['Nombre'];
            $cantidad = $row['Cantidad'];
        }
    }

    if (isset($_POST['Guardar'])) {
        $id = $_GET['id'];
        $nombre = $_POST['Nombre'];
        $cantidad = $_POST['Cantidad'];

        $editar = "UPDATE datos_stock SET Nombre = '$nombre', Cantidad = '$cantidad' WHERE id = $id";
        mysqli_query($conn, $editar);
        header("Location: ../pañol/stock.php");

    }


?> 

<?php include ('../pañol/header_pañol.php') ?>

<div class="card">
    <div class="card-body">
    <h5 class="mt-2">Editar Material</h5>
        <div class="container p-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body">
                        <form action="../pañol/editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                            <div class="form-group mb-3">
                                <input type="text" name="Nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Nuevo nombre" autofocus="autofocus">
                                <input type="text" name="Cantidad" value="<?php echo $cantidad; ?>" class="form-control mt-3" placeholder="Nueva cantidad" autofocus="autofocus">
                            </div>
                            <div>
                                <input type="submit" class="btn btn-success btn-block" name="Guardar" value="Modificar"> 
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('../pañol/footer_pañol.php') ?>