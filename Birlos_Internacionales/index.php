<?php 
$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
    header('location: php/');
}else{

    if(!empty($_POST))
    {
        if(empty($_POST['USUARIO']) && empty($_POST['CLAVE']))
        {
            $alert = 'Ingrese su usuario y su calve';
        }else{

            require_once "conexion.php";

            $user = mysqli_real_escape_string($conexion,$_POST['USUARIO']);
            $pass = md5(mysqli_real_escape_string($conexion,$_POST['CLAVE']));

            $query = mysqli_query($conexion,"SELECT * FROM USUARIO WHERE USUARIO = '$user' AND CLAVE = '$pass'");
            mysqli_close($conexion);
            $result = mysqli_num_rows($query);

            if($result > 0)
            {
                $data = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['ID'] = $data['ID'];
                $_SESSION['NOMBRE'] = $data['NOBRE'];
                $_SESSION['CORREO'] = $data['CORREO'];
                $_SESSION['idUser'] = $data['USUARO'];
                $_SESSION['ID_ROL']  = $data['ID_ROL'];
                echo "bienvenido admin";
                //header('location: php/');
            }else{
                $alert = 'El usuario o la clave son incorrectos';
                session_destroy();
            }


        }

    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Sistema Facturación</title>
    <link rel="stylesheet" type="text/css" href="css/Indstyle.css">
</head>
<body>
    <section id="container">
        
        <form action="" method="post">
            
            <h3>Iniciar Sesión</h3>

            <input type="text" name="USUARIO" placeholder="Usuario">
            <input type="password" name="CLAVE" placeholder="Contraseña">
            <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
            <input type="submit" value="INGRESAR">

        </form>

    </section>
</body>
</html>