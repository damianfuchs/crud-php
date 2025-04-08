<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP MySql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/2a74c677d5.js" crossorigin="anonymous"></script>
</head>


<body>

    <script>
        function eliminar(){
            var respuesta = confirm("Estas seguro que deseas eliminarlo?");
            return respuesta;
        }
    </script>

    <h1 class="text-center p-3">REGISTRO DE USUARIO</h1>

    <?php
        include "modelo/conexion.php";
        include "controlador/eliminar_usuario.php";
        
    ?>

    <div class="container-fluid row">
        <form class="col-3 p-3" method="POST">
            <h3 class="text-center alert alert-secondary">DATOS DEL USUARIO</h3>

            <?php
                include "modelo/conexion.php";
                include "controlador/registro_usuario.php";
            ?>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" name="correo">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="bg-info">ID</th>
                        <th scope="col" class="bg-info">NOMBRE</th>
                        <th scope="col" class="bg-info">APELLIDO</th>
                        <th scope="col" class="bg-info">DNI</th>
                        <th scope="col" class="bg-info">FECHA NACIMIENTO</th>
                        <th scope="col" class="bg-info">EMAIL</th>
                        <th scope="col" class="bg-info"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        include "modelo/conexion.php";
                        $sql=$conexion->query("select * from usuario");
                        while($datos=$sql->fetch_object()){ 
                        ?>
                            <tr>
                                <td><?= $datos->usuario_id?></td>
                                <td><?= $datos->usuario_nombre?></td>
                                <td><?= $datos->usuario_apellido?></td>
                                <td><?= $datos->usuario_dni?></td>
                                <td><?= $datos->usuario_fecha?></td>
                                <td><?= $datos->usuario_mail?></td>
                                <td>
                                    <a href="editar_usuario.php ?id=<?=$datos->usuario_id?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar()" href="index.php?id=<?=$datos->usuario_id?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                    ?>

                </tbody>
            </table>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>