<?php
require_once 'libs/Smarty.class.php';

class InmoView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
        $this->controller = new adminController();
    }
    function showProperties($properties, $tipos, $index){
        $this->smarty->assign('properties', $properties);//tabla propiedades //creo q es aca
        $this->smarty->assign('tipos', $tipos); //muestra tabla productos
        $this->smarty->assign('index', $index);
        $this->smarty->display('templates/propiedades.tpl');
    } 
    //muestra detalle
    function showProperty($property){
        $this->smarty->assign('property',$property); 
        $this->smarty->display('templates/detail.tpl'); 
    }

    function showfilters($tipos){
        $this->smarty->assign('tipos',$tipos);
        $this->smarty->display('templates/propiedades.tpl');
    }

    function Filtrar($properties){
        $this->smarty->assign('properties',$properties);
        $this->smarty->display('templates/filterstable.tpl'); //filter
    }

    function ShowFormEdit($property){
        $this->smarty->assign('property',$property);
        $this->smarty->display('templates/form.edit.tpl'); 
    }

    function EditItem($property){
        $this->smarty->assign('property',$property);
        //$this->smarty->display('templates/propiedades.tpl');
    }

    function showformeditcat(){
        $this->smarty->display('templates/form.edit.cat.tpl');
    }

    function goToshowProperties() {
        header("Location: " . BASE_URL);
    }
}