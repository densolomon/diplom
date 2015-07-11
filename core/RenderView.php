<?php

class RenderView {
    static public function render($file) {
        ob_start();
        include "/".$file.".tpl";
        return ob_get_clean();
    }
}