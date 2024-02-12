<?php
//controla el inicio de sesion

//se verifica que existan datos en el formulario
echo "hola";
header("Location: ../index.html");

if (
    isset($_POST['usuario']) && !empty($_POST['usuario']) &&
    isset($_POST['password']) && !empty($_POST['password'])
) {

    //se hace el llamado al modelo de conexion y consultas
    require_once '../modelo/MySQL.php';

    // se capturan las variables que vienen desde el formulario

    $user = $_POST['usuario'];
    $pass = ($_POST['password']);

    // se instancia la clase, es decir, se llama para poder usar sus metodos

    $mysql = new MySQL();
    // se hace el uso del metodo para conectar a la base de datos
    $mysql->conectar();

    // se guarda en una variable la consulta utilizando el metodo para dicho procedimiento

    $usuarios = $mysql->efecturaConsulta("SELECT
bd_juanitopetacas.login.USUARIO,
bd_juanitopetacas.login.ID,
bd_juanitopetacas.login.PASS
FROM bd_juanitopetacas.login WHERE
bd_juanitopetacas.login.USUARIO = '" . $user . "' and
bd_juanitopetacas.login.PASS = '" . $pass . "'
");
    // se desconecta de la base de datos para liberar memoria

    $mysql->desconectar();

    //captura los datos de la consulta, captura en una sola fila


    //se cuentan las filas de la consulta , por cada usuario que coincida es  una fila
    // si ña cpnsulta arroja 1 y es mayor a cero existe el usuario sino no

    $fila = mysqli_fetch_assoc($usuarios);


    if (mysqli_num_rows($usuarios) > 0) {
        //inicia sesion
        //session_star();

        //traiga el modelo 
        header("Location: ../empleados.php");
    } else {
        header("Location: ../index.html");
    }
}
