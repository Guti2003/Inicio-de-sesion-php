<?php

    include '../Conexion.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $nombreEquipo = $_POST["Equipos"];
        $Puntos = $_POST["Puntos"];
    
    
        $sql = "UPDATE equipos SET Puntos = '$Puntos' WHERE Equipo = '$nombreEquipo'";
        $resultado = mysqli_query($conexion, $sql);
        
    
        if($resultado){

            header("Location: Cambio_Exitoso.php");


        }else{

            echo "Error al actualizar";

        }
    }


?>