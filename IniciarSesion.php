<?php   
    session_start();
    include('Conexion.php');

    if (isset($_POST['Usuario1']) && isset($_POST['Clave1']) ) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario1']); 
    $Clave = validate($_POST['Clave1']);

    if (empty($Usuario)) {
        header("Location: Index.php?error=El Usuario Es Requerido");
        exit();
    }elseif (empty($Clave)) {
        header("Location: Index.php?error=La clave Es Requerida");
        exit();
    }else{

        // $Clave = md5($Clave);

        $Sql = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' AND Contraseña='$Clave'";
        $result = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Usuario'] === $Usuario && $row['Contraseña'] === $Clave) {
                $_SESSION['Usuario1'] = $row['Usuario'];
                $_SESSION['Nombre'] = $row['Nombre'];
                $_SESSION['Id'] = $row['Id'];
                header("Location: Inicio.php");
                exit();
            }else {
                header("Location: Index.php?error=El usuario o la clave son incorrectas");
                exit();
            }

        }else {
            header("Location: Index.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }

} else {
    header("Location: Index.php");
            exit();
}

