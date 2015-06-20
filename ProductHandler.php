<?php
/**
 * Created by PhpStorm.
 * User: teacher
 * Date: 20.06.2015
 * Time: 13:03
 */

class ProductHandler {

    private $_product;

    public function __construct() {}

    public function createProduct(array $product) {
        $id_product = (!empty($product["id_product"])) ? $product["id_product"] : "NULL";
        $name;
        $description;
        $price;
        $count;
        $units;
        $articul;
        $producer;

        $this->_product = new Product();
    }

    public function addProduct(Product $product = null) {
        $db = DatabaseConnection::getInstance()->dbConn;

        $db->execute();
        $db->query();
    }
}