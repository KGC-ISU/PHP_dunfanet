<?php

namespace Dunfa\Controller;

use GuzzleHttp\Client;

class InfoController extends MasterController {

    public function charInfo() {

        $id = $_GET['id'];
        $server = $_GET['server'];

        
        $this->render("char/info");

    }

}