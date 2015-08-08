<?php


class IndexController {
    public function indexAction() {
        return RenderView::render("index");
    }
    public function signinAction() {
        return RenderView::render("signin");
    }
}