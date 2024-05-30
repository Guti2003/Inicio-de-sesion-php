<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>Registrarse</title>
</head>
    <div class="contenedor">
        <h1><ins>Registrarse</ins></h1>
        <br>
        <form action="register.php" method="post">

            <label for="">
                <img width="25px" src="ICONS/User.svg" alt="">
                Usuario
            </label>
            <input type="text" name="Usuario" placeholder="Ingrese usuario">
            <label for="">
                <img width="25px" src="ICONS/User.svg" alt="">
                Nombre
            </label>
            <input type="text" name="Nombre" placeholder="Ingrese Correo">
            <label for="">
                <img width="25px" src="ICONS/Key.svg" alt="">
                Clave
            </label>
            <input type="password" name="Clave" placeholder="Ingrese Clave">
            <label for="">
                <img width="25px" src="ICONS/Key.svg" alt="">
                Repetir Clave
            </label>
            <input type="password" name="RepetirClave" placeholder="Repita Clave">
            <input type="submit" class="button" value="Registrarse">
            <a href="Index.php" class="Boton_Ingresar">
                Ingresar
            </a>

        </form>
    </div>
</body>
</html>