<?php

require_once '../modelo/MySQL.php';

$id = $_POST['id'];
$user = $_POST['usuario'];
$pass = ($_POST['password']);

$mysql = new MySQL();

$mysql->conectar();

$usuarios = $mysql->efecturaConsulta("UPDATE bd_juanitopetacas.login SET
bd_juanitopetacas.login.USUARIO = '" . $user . "', bd_juanitopetacas.login.PASS = '" . $pass . "' 
WHERE bd_juanitopetacas.login.ID = '" . $id . "' 

");

$mysql->desconectar();


header("Location: ../empleados.php");
