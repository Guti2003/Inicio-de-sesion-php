<?php

    include 'conexion.php';


    if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombreEquipo = $_POST["Nombre"];
    $Ciudad = $_POST["Ciudad"];


    $sql = "INSERT INTO equipos (Equipo , ciudad) VALUES ('$nombreEquipo', '$Ciudad')";
    $resultado = mysqli_query($conexion, $sql);
    

    if($resultado) {

        header("Location: Registro_equipo/RegistroExitoso.php");
        exit();

    }else{

        echo "Error al registrar".mysqli_error($conexion);

    }







}








?>