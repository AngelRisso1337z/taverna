<?php
require_once ('../funciones/bd.php');

class items{

    public $idItem;
    public $nombreItem;
    public $pesoItem;
    public $estadoItem;
    public $tipoItem;

    /**
     * items constructor.
     * @param $idItem
     * @param $nombreItem
     * @param $pesoItem
     * @param $estadoItem
     * @param $tipoItem
     */
    public function __construct($idItem=0, $nombreItem="", $estadoItem=0, $pesoItem=0, $tipoItem="")
    {
        $this->idItem = $idItem;
        $this->nombreItem = $nombreItem;
        $this->estadoItem = $estadoItem;
        $this->pesoItem = $pesoItem;
        $this->tipoItem = $tipoItem;
    }

    //

    //funciones para la base de datos
    function insertar(){

        $query = "insert into items (nombreItem,pesoItem,tipoItem,estadoItem)
                  values ('".$this->nombreItem."','".$this->pesoItem."','".$this->tipoItem."','".$this->estadoItem."');";
        $sql = fn_EjecutarQuery($query);

        return 0;

    }

    function obtener(){
        $query = "select * from items;";
        $sql = fn_EjecutarQuery($query);

        while ( $sRow = fn_ExtraerQuery($sql) ){
            $datos[] = $sRow;
        }

        return $datos;

    }

    function obtenerInfo($idItem){
        $query = "select * from items where idItem = ".$idItem;
        $sql = fn_EjecutarQuery($query);

        $datos = fn_ExtraerQuery($sql);

        return $datos;

    }

    function actualizar(){
        $query = "update items set
                  nombreItem = '$this->nombreItem',
                  pesoItem = '$this->pesoItem',
                  tipoItem = '$this->tipoItem',
                  estadoItem = '$this->estadoItem'
                  where idItem = ".$this->idItem." 
                  ";
        $sql = fn_EjecutarQuery($query);
        return 0;

    }




}