<?php
require_once '../modelo/usuario.php';

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['acceso']);
session_destroy();
header("Location: ../index.php");
exit();
