<?php
    // Incluir el archivo de conexión
    include 'conexion.php';

    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recuperar los datos del formulario
        $usuario = $_POST["Usuario"];
        $Nombre = $_POST["Nombre"];
        $clave = $_POST["Clave"];
        $repetir_clave = $_POST["RepetirClave"];
        
    
        // Verificar si las claves coinciden
        if ($clave == $repetir_clave) {
            // Agregar los datos a la base de datos

            print(" $usuario");
            print(" $Nombre");
            print(" $clave ");
            
            $sql = "INSERT INTO usuarios (Usuario, Contraseña, Nombre) VALUES ('$usuario', '$clave', '$Nombre')";
            $resultado = mysqli_query($conexion, $sql);

            if ($resultado) {
                echo "Registro exitoso";
            } else {
                echo "Error al registrar: ". mysqli_error($conexion);
            }
        } else {
            echo "Las claves no coinciden";            
        }
    }
?>