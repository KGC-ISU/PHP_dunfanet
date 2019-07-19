<?php

namespace Dunfa\Controller;

use GuzzleHttp\Client;

class InfoController extends MasterController {

    private const KEY = "YbdxhQ6x66i6pXWDrZL4QfxWCNLPOLYe";

    public function charInfo() {

        $id = $_GET['id'];
        $server = $_GET['server'];

        $url = "https://api.neople.co.kr/df/servers/" . $server . "/characters/" . $id . "/equip/equipment?apikey=" . self::KEY; 

        $client = new Client();

        $res = $client->request("GET", $url, []);

        $data = json_decode($res->getBody());

        // 캐릭터 장비정보
        $equip = $data->equipment;
        
        $url = "https://api.neople.co.kr/df/servers/" . $server . "/characters/" . $id . "/equip/avatar?apikey=" . self::KEY;

        $res = $client->request("GET", $url, []);

        $data = json_decode($res->getBody());

        // 캐릭터 아바타
        $avatar = $data->avatar;

        $url = "https://api.neople.co.kr/df/servers/" . $server . "/characters/" . $id . "/equip/creature?apikey=" . self::KEY;

        $res = $client->request("GET", $url, []);

        $data = json_decode($res->getBody());

        if($data->creature == null) {
            $creture = null;
        } else {
            // 캐릭터 크리처
            $creture = $data->creature;
        }

        $url = "https://api.neople.co.kr/df/servers/" . $server . "/characters/" . $id . "/skill/buff/equip/equipment?apikey=" . self::KEY;

        $res = $client->request("GET", $url, []);

        $data = json_decode($res->getBody());

        if($data->skill->buff == null) {
            $swInfo = null;
            $swItem = null;
            $swAvatar = null;
            $swCreature = null;
        } else {
            // 캐릭터 스위칭 레벨
            $swInfo = $data->skill->buff->skillInfo;

            // 캐릭터 스위칭 장비
            $swItem = $data->skill->buff->equipment;

            $url = "https://api.neople.co.kr/df/servers/" . $server . "/characters/" . $id . "/skill/buff/equip/avatar?apikey=" . self::KEY;

            $res = $client->request("GET", $url, []);

            $data = json_decode($res->getBody());

            // 캐릭터 스위칭 아바타
            $swAvatar = $data->skill->buff->avatar;   

            $url = "https://api.neople.co.kr/df/servers/" . $server . "/characters/" . $id . "/skill/buff/equip/creature?apikey=" . self::KEY;

            $res = $client->request("GET", $url, []);

            $data = json_decode($res->getBody());

            if($data->skill->buff->creature == null) {
                $swCreature = null;
            } else {
                $swCreature = $data->skill->buff->creature;
            }
        }
        
        $this->render("char/info", ['info' => $data, 'equip' => $equip, 'creature' => $creture, 'avatar' => $avatar, 'swInfo' => $swInfo, 'swItem' => $swItem, 'swAvatar' => $swAvatar, 'swCreature' => $swCreature, 'server' => $server, 'cain'=>'카인', 'diregie'=>'디레지에', 'siroco'=>'시로코', 'prey'=>'프레이', 'casillas'=>'카시야스', 'hilder'=>'힐더', 'anton'=>'안톤', 'bakal'=>'바칼' ]);

    }

}