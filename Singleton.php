<?php
/**
 * Created by PhpStorm.
 * User: teacher
 * Date: 20.06.2015
 * Time: 12:58
 */

trait Singleton {
    static private $_instance = null;

    private function  __construct() {}

    private function __clone() {}

    static public function getInstance() {
        if(self::$_instance == null) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
}