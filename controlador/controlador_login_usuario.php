<?php
include("../conexion/conexion.php");
if (!empty($_POST["login"])) {
    if (empty($_POST["email"]) or empty($_POST["contraseña"])) {
        echo '<p>Uno de los campos esta vacio</p>';
    } else {
        
        $email=$_POST("email");
        $contraseña=$_POST("contraseña");
        $sql=$conexion->query("insert into usuario(email,pass)values('$email','$contraseña',)");
if($sql==1){
    echo '<p>Usuario iniciado correctamente</p>';
} else {
    echo  '<p>Error al iniciar</p>';
  }
    }
}
?>