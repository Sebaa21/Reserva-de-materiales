<?php

include("../db.php");

if (isset($_POST['Reservar'])){
    $r1 = $_POST['Nombre'];
    $r3 = $_POST['Sala'];
    $r4 = $_POST['Horario'];
    $r5 = $_POST['Material_1'];
    $r6 = $_POST['C1'];
    $r7 = $_POST['Material_2'];
    $r8 = $_POST['C2'];
    $r9 = $_POST['Material_3'];
    $r10 = $_POST['C3'];
    $r11 = $_POST['Material_4'];
    $r12 = $_POST['C4'];
    $r13 = $_POST['Material_5'];
    $r14 = $_POST['C5'];
    
    $reserva = "INSERT INTO datos_reserva(Nombre, Sala, Horario, Material_1, C1, Material_2, C2, Material_3, C3, Material_4, C4, Material_5, C5) VALUES ('$r1', '$r3', '$r4', '$r5', '$r6', '$r7', '$r8', '$r9', '$r10', '$r11', '$r12','$r13', '$r14')";
    $result = mysqli_query($conn, $reserva);
    if (!$result) {
        die("Error");
    } 
        
    header("Location: ../docentes/reserva.php");
}

?>    