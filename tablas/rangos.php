<?php
require_once ('../funciones/bd.php');

class rangos{

    public $idRangos;
    public $nombreRango;
    public $nivelRango;
    public $estadoRango;

    /**
     * items constructor.
     * @param $idRangos
     * @param $nombreRango
     * @param $nivelRango
     * @param $estadoRango
     */
    public function __construct($idRangos=0, $nombreRango="", $nivelRango=0, $estadoRango=0)
    {
        $this->idRangos = $idRangos;
        $this->nombreRango = $nombreRango;
        $this->nivelRango = $nivelRango;
        $this->estadoRango = $estadoRango;
    }

    //

    //funciones para la base de datos
    function insertar(){

        $query = "insert into rangos (nombreRango,nivelRango,estadoRango)
                  values ('".$this->nombreRango."','".$this->nivelRango."','".$this->estadoRango."');";
        $sql = fn_EjecutarQuery($query);

        return 0;

    }

    function obtener(){
        $query = "select * from rangos;";
        $sql = fn_EjecutarQuery($query);

        while ( $sRow = fn_ExtraerQuery($sql) ){
            $datos[] = $sRow;
        }

        return $datos;

    }

    function obtenerInfo($idRangos){
        $query = "select * from rangos where idRangos = ".$idRangos;
        $sql = fn_EjecutarQuery($query);

        $datos = fn_ExtraerQuery($sql);

        return $datos;

    }

    function actualizar(){
        $query = "update rangos set
                  nombreItem = '$this->nombreRango',
                  pesoItem = '$this->nivelRango',
                  tipoItem = '$this->estadoRango',
                  where idItem = ".$this->idRangos." 
                  ";
        $sql = fn_EjecutarQuery($query);
        return 0;

    }




}