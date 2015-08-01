<?php


class IndexController {
    public function indexAction() {
        return RenderView::render("signin");
    }
}