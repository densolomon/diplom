<?php
namespace Admin;
use RenderView;

class AdminController {
    public function indexAction() {
        return RenderView::render("signup");
    }
} 