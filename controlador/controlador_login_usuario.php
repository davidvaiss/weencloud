<?php
include("../conexion/conexion.php");
if (!empty($_POST["login"])) {
    if (empty($_POST["email"]) or empty($_POST["contraseña"])) {
        echo '<p>Uno de los campos esta vacio</p>';
    } else {
        
        $email=$_POST["email"];
        $contraseña=$_POST["contraseña"];
        $sql=$con->query("SELECT *FROM registro WHERE email='$email'");
        $resultado=$sql;
        if ($resultado->num_rows==1){
            $usuario = mysqli_fetch_assoc($resultado);
        }
            if (password_verify($contraseña, $usuario['pass'])) {
                echo('HAS INICIADO BIEN');
                header("location: ../index.php");
            }
    }
}
?>