

<?php

    include '../Conexion.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){


        $Nombre = $_POST["Nombre"];
        $Goles = $_POST["Goles"];
        $Asistencias = $_POST["Asistencias"];
        $Tarjetas = $_POST["Tarjetas"];
        $Equipos = $_POST["Equipos"];

        $sql = "UPDATE jugadores SET Goles = '$Goles', Asistencias = '$Asistencias', Tarjetas = '$Tarjetas', Equipo = '$Equipos' WHERE Jugador = '$Nombre'";

        $resultado = mysqli_query($conexion, $sql);

        if($resultado){

            header("Location: Actua_exitoso.php");


        }else{

            echo "Error '$Conexion'";
        }
           



    }









?>