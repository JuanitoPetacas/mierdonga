<?php

require_once 'modelo/MySQL.php';

$mysql = new MySQL();
$mysql->conectar();
$consulta = $mysql->efecturaConsulta("SELECT * FROM bd_juanitopetacas.login");

$mysql->desconectar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 colsito">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Password</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($consulta)) {  ?>
                            <tr>
                                <td><?php echo $row['ID'] ?></td>
                                <td><?php echo $row['USUARIO'] ?></td>
                                <td><?php echo $row['PASS'] ?></td>

                            </tr>
                    </tbody>
                <?php }  ?>
                </table>


                <button class="btn btn-warning" type="submit"><a href="registro.php">Agregar</a></button>
                <button class="btn btn-success" type="submit"><a href="registroEdit.php">Editar</a></button>


            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-6">
                <form action="controlador/eliminar.php" method="post">


                    <h1>Usuario A eliminar</h1>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Ingresa ID a Eliminar</label>
                        <input type="text" class="form-control" name="id">
                    </div>
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                    

                </form>
                <form action="controlador/cerrarSesion.php" method="post">

                <button class="btn btn-danger" type="submit"><a href="cerrarSesion.php"></a>Cerrar Sesion</button>
                </form>
                         
            </div>
        </div>

    </div>

</body>

</html>