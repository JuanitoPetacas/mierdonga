<?php
require_once '../modelo/usuarios.php';
require_once '../../modelo/MySQL.php';

session_start();

$usuario = new usuarios();

if($_SESSION['acceso']==true && $_SESSION['usuario'] != null  ){
$usuario 
}
else{
    header("Location: ../index.php")
}