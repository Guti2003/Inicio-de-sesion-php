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
      <form action="register.php" method="POST">
         <h1>Login</h1>

         <div class="input-box">
            <input type="text" name="Nombre" placeholder="Nombre" required>
            <i class='bx bxs-user'></i>
         </div>
         <div class="input-box">
            <input type="text" name="Usuario" placeholder="Nombre Usuario" required>
            <i class='bx bxs-user'></i>
         </div>
         <div class="input-box">
            <input type="password" name="Clave" placeholder="Contraseña" required>
            <i class='bx bxs-lock-alt'></i>
         </div>
         <div class="input-box">
            <input type="password" name="RepetirClave" placeholder="Repetir Contraseña" required>
            <i class='bx bxs-lock-alt'></i>
         </div>
         <button type="submit" class="btn">Registrarse</button>
         <div class="register-link">
            <p><a href="index.php">Ingresar</a></p>

         </div>

         </form>
   </div>