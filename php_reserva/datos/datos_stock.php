<?php

include("../db.php");

if (isset($_POST['Agregar'])){
    $nombre = $_POST['Nombre'];
    $cantidad = $_POST['Cantidad'];
    
    $stock = "INSERT INTO datos_stock(Nombre, Cantidad) VALUES ('$nombre', '$cantidad')";
    $result = mysqli_query($conn, $stock);
    if (!$result) {
        die("Error");
    } 
        
    header("Location: ../pañol/stock.php");
}

?>    