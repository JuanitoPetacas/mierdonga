<?php

class usuarios {
private $nombre;
private $apellido;
private $id;
private $rol;

public function __construct(){}

public function setId($id){

    $this->id = $id;

}
//captura el nombre y lo almacena en nombre

public function setNombre($nombre){
    $this->$nombre = $nombre;
}

//devolver variables que capture anteriormente

public function getId($id){

return $this->id;

}


public function getNombre($nombre){
return $this->$nombre;
}
}