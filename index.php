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
      <form action="IniciarSesion.php" method="POST">
         <h1>Login</h1>

         <div class="input-box">
            <input type="text" name="Usuario1" placeholder="Nombre Usuario" required>
            <i class='bx bxs-user'></i>
         </div>
         <div class="input-box">
            <input type="password" name="Clave1" placeholder="Contraseña" required>
            <i class='bx bxs-lock-alt'></i>
         </div>
         <button type="submit" class="btn">Ingresar</button>
         <div class="register-link">
            <p><a href="registro.php">Registrarse</a></p>

         </div>

         </form>
   </div>