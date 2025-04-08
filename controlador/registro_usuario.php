<?php
    if(!empty($_POST["btnregistrar"])){
        if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
            
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $dni = $_POST["dni"];
            $fecha = $_POST["fecha"];
            $correo = $_POST["correo"];

            $sql=$conexion->query("insert into usuario(usuario_nombre, usuario_apellido, usuario_dni, usuario_fecha, usuario_mail) 
            values('$nombre', '$apellido', '$dni', '$fecha', '$correo')");

            if($sql==1){
                echo '<div class="alert alert-success">Persona Registrada Correctamente</div>';
            }
            else{
                echo '<div class="alert alert-danger">Error al Registrar a la Persona</div>';
            }
        }
        else{
            echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
        }

    }
?>


