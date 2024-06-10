<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gema</title>
   <link rel="stylesheet" href="../estilo/estilos.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <div class="logo">
      <img src="../estilo/imagenes/logo.png" alt="cargando">
   </div>
   <div class="login">
      <form action="Actualizar_Jugador.php" method="POST">
         <h1>Actualizar jugador</h1>

         <div class="input-box">
            <h2>Nombre</h2>
           <!-- <input type="text" name="Nombre" placeholder="Nombre" required>  Nombre del equipo -->
            <select name="Nombre" id="Nombre"> <?php 
            include "../Conexion.php";

            // Consulta SQL para obtener los equipos
            $query = "SELECT * FROM jugadores ORDER BY Jugador DESC";

            // Ejecutar la consulta
            $result = mysqli_query($conexion, $query);

            // Recorrer los resultados y mostrarlos en el cuadro de selección HTML
            while($row = mysqli_fetch_assoc($result)) {
                echo "<option name='".$row['Jugador']."'>".$row['Jugador']."</option>";
            }
        ?></select>
            <i class='bx bxs-user'></i> 
         </div>
         <div class="input-box">
            <input type="number" name="Goles" placeholder="Goles actuales">
            <i class='bx bxs-user'></i>
         </div>
         
         <div class="input-box">
            <input type="number" name="Asistencias" placeholder="Asistencias actuales">
            <i class='bx bxs-user'></i>
         </div>
         <div class="input-box">
            <input type="number" name="Tarjetas" placeholder="Tarjetas actuales">
            <i class='bx bxs-user'></i>
         </div>
         
         
         <div class="input-box">
            <h2>Equipo</h2>
           <!-- <input type="text" name="Nombre" placeholder="Nombre" required>  Nombre del equipo -->
            <select name="Equipos" id="Equipos"> <?php 
            include "../Conexion.php";

            // Consulta SQL para obtener los equipos
            $query = "SELECT * FROM equipos ORDER BY puntos DESC";

            // Ejecutar la consulta
            $result = mysqli_query($conexion, $query);

            // Recorrer los resultados y mostrarlos en el cuadro de selección HTML
            while($row = mysqli_fetch_assoc($result)) {
                echo "<option name='".$row['Equipo']."'>".$row['Equipo']."</option>";
            }
        ?></select>
            <i class='bx bxs-user'></i> 
         </div>
         <button type="submit" class="btn">Agregar</button>
         <div class="register-link">
            <p><a href="../inicio.php">Volver</a></p>

         </div>

         </form>
   </div>