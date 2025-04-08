<?php
    if(!empty($_GET["id"])){
        $id=$_GET["id"];
        $sql = $conexion->query("delete from usuario where usuario_id =$id");

        if($sql==1){
            echo '<div class="alert alert-success">Eliminado Correctamente</div>';
        }
        else{
            echo '<div class="alert alert-danger">Error al Eliminar</div>';
        }
    }
?>