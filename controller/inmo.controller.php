<?php
require_once './model/inmo.model.php';
require_once './view/inmo.view.php';

class InmoController {
    private $model;
    private $view;

    public function __construct(){
        $this->model = new InmoModel();
        $this->view = new InmoView();
    }

    public function showProperties(){
        $propertie = $this ->model->getAllProperties();
        $this->view->showProperties($propertie);
    }

    public function showAdminPage(){
        $this->view->Logadmin();
    }
   
    public function showfilters(){
        $tipo = $this ->model->showWithFilters();
        $this->view->showfilters($tipo);
    }

    public function showdetail($id){
        $itemselected = $this->model->showPropertieDetail($id);
        $this->view->showDetails($itemselected);
    }
}