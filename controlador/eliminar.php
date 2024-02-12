<?php

require_once '../modelo/MySQL.php';

$id = $_POST['id'];


$mysql = new MySQL();

$mysql->conectar();

$usuarios = $mysql->efecturaConsulta("DELETE FROM bd_juanitopetacas.login where bd_juanitopetacas.login.ID = " . $id . "
");

$mysql->desconectar();


header("Location: ../empleados.php");
