<?php

class FrontController {
    private $_request = null;
    private $_body;

    public function __construct() {
        $request = explode("?",$_SERVER["REQUEST_URI"]);
        $this->_request = trim($request[0], "/");
    }

    public function run() {
        $request = explode("/",$this->_request);
        $ctrl = (!empty($request[0])) ? ucfirst($request[0])."Controller" : "IndexController";
        $method = (!empty($request[1])) ? $request[1]."Action" : "indexAction";

        if(class_exists($ctrl)) {
            $objCtrl = new $ctrl();
            if(method_exists($objCtrl,$method)) {
                $this->_body = $objCtrl->$method();
            }
        }
    }

    public function getBody() {
        return $this->_body;
    }
}