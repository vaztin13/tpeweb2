<?php
require_once './app/model/inmo.model.php';
require_once './app/view/inmo.view.php';
require_once './app/model/type.model.php';
//require_once './helpers/admin.helper.php';

class InmoController {
    private $model;
    private $view;
    private $typemodel;

    public function __construct(){
        $this->model = new InmoModel();
        $this->view = new InmoView();
        $this->typemodel = new typeModel();
        //$adminhelper = new adminHelper();
        //$adminhelper->checkLoggedIn();
    }

    public function checkLoggedIn() {
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL);
            die();
        }
    } 
    

    //muestra propiedades en la tabla
    public function showProperties($index){
        session_start();
        $properties= $this->model->getAllProperties(); //products
        $tipos = $this->typemodel->showFilters(); //product types
        $this->view->showProperties($properties, $tipos, $index);
    }


    //muestra la propiedad con su detalle - manda al model y view
    public function showProperty($id_propiedad){
        session_start();
        $property = $this->model->showPropertyDetail($id_propiedad);
        $this->view->showProperty($property);
    }

    //toma id del boton y borra
    public function DeleteItem($id_propiedad){
        session_start();
        $this->checkLoggedIn();
        $this->model->DeleteItemById($id_propiedad);
        header("Location: " . BASE_URL . "propiedades");
    }

    public function AddItem(){
        $propertyId = $_POST['id_propiedad'] !== '' ? $_POST['id_propiedad'] : null;
        if (is_null($propertyId)) {
        session_start();
        $this->checkLoggedIn();
        $direccion = $_POST['direccion'];
        $tipo = $_POST['tipo'];
        $habitaciones = $_POST['habitaciones'];
        $precio = $_POST['precio'];
        $alquiler_venta = $_POST['alquiler_venta'];

        $this->model->insertItem($direccion, $tipo, $habitaciones,$precio,$alquiler_venta);
        header("Location: " . BASE_URL );
        } else {
            $this->model->EditProperty($propertyId, $_POST['direccion'], $_POST['tipo'], $_POST['habitaciones'], $_POST['precio'], $_POST['alquiler_venta']);
        }
        $this->view->goToshowProperties();
    }
    
    public function ShowFormEdit($index){
        //$this->checkLoggedIn();
        session_start();
        $properties= $this->model->getAllProperties(); //products
        $tipos = $this->typemodel->showFilters(); //product types
        $this->view->showProperties($properties, $tipos, $index);
    }

    public function EditProperty($id){
        //$this->checkLoggedIn();
        session_start();
        $property = $this->model->showPropertyDetail($id);
        $this->view->EditItem($property);
        $direccion = $_POST['direccion'];
        $tipo = $_POST['tipo'];
        $habitaciones = $_POST['habitaciones'];
        $precio = $_POST['precio'];
        $alquiler_venta = $_POST['alquiler_venta'];
        $id = $this->model->EditProperty($direccion, $tipo, $habitaciones, $precio, $alquiler_venta, $id);
    }
}
