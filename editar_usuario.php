<?php

    include "modelo/conexion.php";
    $id = $_GET["id"];
    $sql = $conexion->query("SELECT * FROM usuario WHERE usuario_id = $id");
    
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/2a74c677d5.js" crossorigin="anonymous"></script>

</head>

<body>
    <form class="col-3 p-3 m-auto" method="POST">
        <h3 class="text-center alert alert-secondary">EDITAR USUARIO</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php

            include "controlador/modificar_usuario.php";

            while($datos = $sql->fetch_object()) { ?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="<?= $datos->usuario_nombre?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido" value="<?= $datos->usuario_apellido?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">DNI</label>
                    <input type="text" class="form-control" name="dni" value="<?= $datos->usuario_dni?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha Nacimiento</label>
                    <input type="date" class="form-control" name="fecha" value="<?= $datos->usuario_fecha?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" name="correo" value="<?= $datos->usuario_mail?>">
                </div>
            <?php
            }
        ?>




        <button type="submit" class="btn btn-primary" name="btnguardar" value="ok">Guardar</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>