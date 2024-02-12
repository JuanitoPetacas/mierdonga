<?php

require_once '../modelo/MySQL.php';

$id = $_POST['id'];
$user = $_POST['usuario'];
$pass = ($_POST['password']);

$mysql = new MySQL();

$mysql->conectar();

$usuarios = $mysql->efecturaConsulta("INSERT INTO
bd_juanitopetacas.login VALUES (" . $id . ",'" . $user . "','" . $pass . "')
");

$mysql->desconectar();


header("Location: ../empleados.php");
