<?php
namespace Dunfa\Controller;

class StaticController extends MasterController {

    public function index() {

        $this->render("main");

    }

    public function char() {
        $this->render("char/search");
    }

    public function test() {
        $this->render("test");
    }


    public function errorPage($msg) {
        $this->render("error", ['msg' => $msg]);
    }

}