<?php

namespace Dunfa\Controller;

use GuzzleHttp\Client;

class SearchController extends MasterController {

    private const KEY = "YbdxhQ6x66i6pXWDrZL4QfxWCNLPOLYe";

    public function char() {

        $server = $_POST['server'];
        $name = $_POST['name'];

        $url = "https://api.neople.co.kr/df/servers/" . $server . "/characters?characterName=" . $name . "&limit=200&wordType=full&apikey=" . self::KEY;

        $client = new Client();

        $res = $client->request("GET", $url, []);

        $data = json_decode($res->getBody());

        $rows = $data->rows;

        $this->render("char/search", ['list' => $rows, 'server' => $server, 'cain'=>'카인', 'diregie'=>'디레지에', 'siroco'=>'시로코', 'prey'=>'프레이', 'casillas'=>'카시야스', 'hilder'=>'힐더', 'anton'=>'안톤', 'bakal'=>'바칼']);
    }

}