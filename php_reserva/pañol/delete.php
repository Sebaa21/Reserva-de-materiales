<?php

include("../db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $borrar = "DELETE FROM datos_stock WHERE id = $id";
    $result = mysqli_query($conn, $borrar);
    if (!$result) {
        die("error");
    }

    header("Location: ../pañol/stock.php");

}

?>