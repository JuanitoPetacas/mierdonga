<?php
//clase para conexiones

class MySQL
{

    //Datos de validacion para la conexion

    private $ipServidor = 'localhost';
    private $usuarioBase = 'root';
    private $contrasena = '';


    private $conexion;



    public function conectar()
    {

        $this->conexion = mysqli_connect($this->ipServidor, $this->usuarioBase, $this->contrasena);
    }

    public function desconectar()
    {

        mysqli_close($this->conexion);
    }



    public function efecturaConsulta($consulta)
    {

        mysqli_query($this->conexion, "SET lc_time_names = 'es_Es'");
        //hace el uso de caracteres especiales como tildes con el formato utf
        mysqli_query($this->conexion, "SET NAMES 'utf8'");
        // mysqli_query($this->conexion,"SET NAMES 'utf8'");

        $this->resultadoConsulta = mysqli_query($this->conexion, $consulta);

        return $this->resultadoConsulta;
    }
}
