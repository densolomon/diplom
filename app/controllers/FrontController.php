<?php

class FrontController {
    private $_request = null;
    private $_body;

    public function __construct() {
        $request = explode("?",$_SERVER["REQUEST_URI"]);
        $this->_request = trim($request[0], "/");
    }

    public function run() {
        $params = $this->getUrlParams();


        $ctrl = ($params["module"]) ? $params["module"]."\\".$params["controller"] : $params["controller"];
        $method = $params["method"];

        if(class_exists($ctrl)) {
            $objCtrl = new $ctrl();
            if(method_exists($objCtrl,$method)) {
                $this->_body = $objCtrl->$method();
            }
        }
    }

    private function getUrlParams() {
        $request = explode("/",$this->_request);
        if($request[0] == "admin") {
            return array(
                "module" => "Admin",
                "controller" => (!empty($request[1])) ? ucfirst($request[1])."Controller" : "IndexController",
                "method" => (!empty($request[2])) ? $request[2]."Action" : "indexAction"
            );
        }
        return array(
            "controller" => (!empty($request[0])) ? ucfirst($request[0])."Controller" : "IndexController",
            "method" => (!empty($request[1])) ? $request[1]."Action" : "indexAction"
        );
    }

    public function getBody() {
        return $this->_body;
    }
}