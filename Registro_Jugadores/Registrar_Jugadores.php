<?php

    include '../Conexion.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){


        $Nombre = $_POST["Nombre"];
        $Equipos = $_POST["Equipos"];

        $sql = "INSERT INTO jugadores (Jugador, Equipo) VALUE ('$Nombre','$Equipos')";
        $resultado = mysqli_query($conexion, $sql);

        if($resultado){

            header("Location: Registro_exitoso.php");


        }else{

            echo "Error '$conexion'";
        }
           



    }









?>