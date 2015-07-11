<?php

class Product {
    public $id_product;
    public $name;
    public $description;
    public $price;
    public $count;
    public $units;
    public $articul;
    public $producer;

    public function __construct($id_product="NULL", $name="NULL", $description="NULL",
                                $price="NULL", $count="NULL", $units="NULL", $articul="NULL", $producer="NULL"
    ) {
        $this->id_product  = ($id_product =="NULL") ? $this->id_product  : $id_product ;
        $this->name        = ($name       =="NULL") ? $this->name        : $name       ;
        $this->description = ($description=="NULL") ? $this->description : $description;
        $this->price       = ($price      =="NULL") ? $this->price       : $price      ;
        $this->count       = ($count      =="NULL") ? $this->count       : $count      ;
        $this->units       = ($units      =="NULL") ? $this->units       : $units      ;
        $this->articul     = ($articul    =="NULL") ? $this->articul     : $articul    ;
        $this->producer    = ($producer   =="NULL") ? $this->producer    : $producer   ;
    }
}