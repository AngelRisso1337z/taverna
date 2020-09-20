<?php
require_once ('../funciones/bd.php');

class itemsInventario{

    public $idItemsInventario;
    public $cantidadItems;
    public $itemsIdItems;
    public $estadoItem;
    public $tipoItem;

    /**
     * items constructor.
     * @param $idItemsInventario
     * @param $cantidadItems
     * @param $pesoItem
     * @param $estadoItem
     * @param $tipoItem
     */
    public function __construct($idItemsInventario=0, $cantidadItems=0, $estadoItem=0, $pesoItem=0, $tipoItem="")
    {
        $this->idItemsInventario = $idItemsInventario;
        $this->cantidadItems = $cantidadItems;
        $this->estadoItem = $estadoItem;
        $this->pesoItem = $pesoItem;
        $this->tipoItem = $tipoItem;
    }

    //

    //funciones para la base de datos
    function insertar(){

        $query = "insert into itemsInventario (cantidadItems,pesoItem,tipoItem,estadoItem)
                  values ('".$this->cantidadItems."','".$this->pesoItem."','".$this->tipoItem."','".$this->estadoItem."');";
        $sql = fn_EjecutarQuery($query);

        return 0;

    }

    function obtener(){
        $query = "select * from itemsInventario;";
        $sql = fn_EjecutarQuery($query);

        while ( $sRow = fn_ExtraerQuery($sql) ){
            $datos[] = $sRow;
        }

        return $datos;

    }

    function obtenerInfo($idIItemsInventario){
        $query = "select * from items where idItemsInventario = ".$idItemsInventario;
        $sql = fn_EjecutarQuery($query);

        $datos = fn_ExtraerQuery($sql);

        return $datos;

    }

    function actualizar(){
        $query = "update items set
                  nombreItem = '$this->cantidadItems',
                  pesoItem = '$this->pesoItem',
                  tipoItem = '$this->tipoItem',
                  estadoItem = '$this->estadoItem'
                  where idItem = ".$this->idItem." 
                  ";
        $sql = fn_EjecutarQuery($query);
        return 0;

    }




}