<?php

    if(!empty($_POST["btnguardar"])){
        
        if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
            echo '<div class="alert alert-success">Usuario Modificado</div>';
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $dni = $_POST["dni"];
            $fecha = $_POST["fecha"];
            $correo = $_POST["correo"];

            $sql = $conexion->query("update usuario set usuario_nombre='$nombre',  usuario_apellido='$apellido',  usuario_dni='$dni',  
            usuario_fecha='$fecha',  usuario_mail='$correo' where usuario_id = $id");

            if($sql == 1){
                header("location:index.php");
            }
            else{
                echo '<div class="alert alert-danger">Error al Modificar</div>';
            }
            
        }
        else{
            echo '<div class="alert alert-warning">Faltan Datos</div>';
        }

    }

?>
