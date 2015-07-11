<?php

class Application {
    static public $cfg = null;

    static public function init() {
        self::getConfig();
        self::setPaths();
        self::setAutoloadFunction();
        $fc = new FrontController();
        return $fc;
    }

    private function getConfig() {
        self::$cfg = include "config/app.cfg.php";
    }

    private function setPaths() {
        $paths = self::$cfg["paths"];
        $incl = '';
        foreach($paths as $path) {
            $incl .= PATH_SEPARATOR . $path;
        }
        set_include_path(get_include_path() . $incl);
    }

    private function setAutoloadFunction() {
        spl_autoload_register(function($className){
            spl_autoload($className);
        });
    }
}