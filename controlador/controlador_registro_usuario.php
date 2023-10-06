<?php
if (!empty($_POST["registro"])) {
    if (empty($_POST["nombrec"]) or empty($_POST["email"]) or empty($_POST["numero"]) empty($_POST["tdocumento"]) or empty($_POST["contraseña"]) or empty($_POST["nu_documento"]) empty($_POST["conficontraseña"]) empty($_POST["barrio"]) or empty($_POST["rol"]) or empty($_POST["genero"])) {
        echo 
    } else {
        $nombrec=$_POST("nombrec");
        $email=$_POST("email");
        $numero=$_POST("numero");
        $documento=$_POST("tdocumento");
        $contraseña=$_POST("contraseña");
        $nu_documento=$_POST("nu_documento");
        $conficontraseña=$_POST("conficontraseña");
        $barrio=$_POST("barrio");
        $rol=$_POST("rol");
        $genero=$_POST("genero");

        $sql=$conexion->query("insert into usuario(nomcom,email,numtel,pass,confirpass,genero,numdoc,tipdoc,barrio,rol)values('$nomcom','$email','$numtel',)");
    }
}
?>