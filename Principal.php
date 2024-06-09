<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gema</title>
    <link rel="stylesheet" href="inicio.css">
</head>
<body>
    <div class="logo">
        <img src="estilo/imagenes/logo.png" alt="cargando">      
    </div>
    <div class="cerrarcesion">
        <a href="index.php" class="btn btn-danger">Iniciar sesion</a>
    </div>
    <header>
        <h1>Bienvenido</h1>
    </header>
    <section class="main-content">

        <div class="top-assists">
            <h2>TOP 3 ASISTENCIAS</h2>
            <h3>Harlan Barrera </h3>
            <h3>Daniel Ruiz</h3>
            <h3>Andres Ricaute</h3>
        </div>
        <div class="top-goals">
            <h2>TOP 3 GOLES</h2>
            <h3>Harlan Barrera </h3>
            <h3>Daniel Ruiz</h3>
            <h3>Andres Ricaute</h3>
        </div>
        <div class="top-cards">
            <h2>TOP 3 TARJETAS</h2>
            <h3>Harlan Barrera </h3>
            <h3>Daniel Ruiz</h3>
            <h3>Andres Ricaute</h3>
        </div>
        <div class="dates">
            <h2>TABLA DE POSICIONES</h2>
            <table border="1"><?php 

                include "Conexion.php";

                // Consulta SQL para obtener los equipos
                $query = "SELECT * FROM equipos ORDER BY puntos DESC";
        
                // Ejecutar la consulta
                $result = mysqli_query($conexion, $query);
        
                // Recorrer los resultados y mostrarlos en la tabla HTML
                while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['Equipo'] . "</td>";
                echo "<td>" . $row['Puntos'] . "</td>";
                echo "</tr>";
                }
            
            
            


            ?></table>
            
        </div>

    </section>

    <footer>
        <!-- Pie de página -->
    </footer>
</body>
</html>