<?php

class ProductHandler {

    private $_product;

    public function __construct() {}

    public function createProduct(array $product) {
        $id_product  = (!empty($product["id_product"])) ? $product["id_product"] : "NULL";
        $name        = (!empty($name["name"])) ? $name["name"] : "NULL";
        $description = (!empty($description["description"])) ? $description["description"] : "NULL";
        $price       = (!empty($price["price"])) ? $price["price"] : "NULL";
        $count       = (!empty($count["count"])) ? $count["count"] : "NULL";
        $units       = (!empty($units["units"])) ? $units["units"] : "NULL";
        $articul     = (!empty($articul["articul"])) ? $articul["articul"] : "NULL";
        $producer    = (!empty($producer["producer"])) ? $producer["producer"] : "NULL";

        $this->_product = new Product();
    }

    public function addProduct(Product $product = null) {
        $db = DatabaseConnection::getInstance()->dbConn;

        $db->execute();
        $db->query();
    }
}