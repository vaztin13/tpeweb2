<?php
require_once 'libs/Smarty.class.php';

class InmoView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty

    }

    function showProperties($properties){
        // asigno variables al tpl smarty
        $this->smarty->assign('properties', $properties);

        // mostrar el tpl
        $this->smarty->display('propiedades.tpl');
    } 

    function Logadmin(){
        $this->smarty->display('administrador.tpl');
    }

    function showDetails($propertie){
        $this->smarty->assign('detalle',$propertie);
        $this->smarty->display('templates/detail.tpl');
    }
}