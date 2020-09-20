<?php
require_once ('../funciones/bd.php');

class inventario{

    public $idinventario;
    public $nombre;
    public $disponible;
    public $rangos_idRangos;

    /**
     * items constructor.
     * @param $idinventario
     * @param $nombre
     * @param $disponible
     * @param $rangos_idRangos
     */
    public function __construct($idinventario=0, $nombre="", $disponible=0, $rangos_idRangos=0)
    {
        $this->idinventario = $idinventario;
        $this->nombre = $nombre;
        $this->disponible = $disponible;
        $this->rangos_idRangos = $rangos_idRangos;
    }

    //

    //funciones para la base de datos
    function insertar(){

        $query = "insert into inventario (nombre,idinventario,disponible,rangos_idRangos)
                  values ('".$this->nombre."','".$this->idinventario."','".$this->disponible."','".$this->rangos_idRangos."');";
        $sql = fn_EjecutarQuery($query);

        return 0;

    }

    function obtener(){
        $query = "select * from inventario;";
        $sql = fn_EjecutarQuery($query);

        while ( $sRow = fn_ExtraerQuery($sql) ){
            $datos[] = $sRow;
        }

        return $datos;

    }

    function obtenerInfo($idinventario){
        $query = "select * from inventario where idinventario = ".$idinventario;
        $sql = fn_EjecutarQuery($query);

        $datos = fn_ExtraerQuery($sql);

        return $datos;

    }

    function actualizar(){
        $query = "update inventario set
                  nombre = '$this->nombre',
                  disponible = '$this->disponible',
                  rangos_idRangos='$this->rangos_idRangos'
                  where idinventario = ".$this->idinventario." 
                  ";
        $sql = fn_EjecutarQuery($query);
        return 0;

    }




}