<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gema</title>
   <link rel="stylesheet" href="estilo/estilos.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <div class="logo">
      <img src="estilo/imagenes/logo.png" alt="cargando">
   </div>
   <div class="login">
      <form action="Registroequipo.php" method="POST">
         <h1>Registrar equipo</h1>

         <div class="input-box">
            <input type="text" name="Nombre" placeholder="Nombre" required> <!-- Nombre del equipo -->
            <i class='bx bxs-user'></i> 
         </div>
         <div class="input-box">
            <input type="text" name="Ciudad" placeholder="Nombre de ciudad" required> <!-- Ciudad -->
            <i class='bx bxs-user'></i>
         </div>
         <button type="submit" class="btn">Registrar</button>
         <div class="register-link">
            <p><a href="inicio.php">Volver</a></p>

         </div>

         </form>
   </div>