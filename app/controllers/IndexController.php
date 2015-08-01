<?php

use Admin\AdminController;

class IndexController {
    public function indexAction() {
        return RenderView::render("signup");
    }
}