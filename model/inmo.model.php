<?php

class InmoModel {
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=inmobiliaria;charset=utf8', 'root', '');
    }

    public function getAllProperties(){
        $query = $this->db->prepare("SELECT * FROM propiedades");
        $query->execute();
        $properties = $query->fetchAll(PDO::FETCH_OBJ);
        return $properties;
    }

    public function showWithFilters(){
        if ($_POST['filtro']=='lote'){
            $query = $this->db->prepare("SELECT * FROM propiedades WHERE tipo=lote"); 
        }

    }

    public function ShowDetails(){
        
    }


}