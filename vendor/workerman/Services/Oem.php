<?php
namespace Services;


use \GatewayWorker\Lib\Gateway;
use \GatewayWorker\Lib\Db;


class Oem{
    public static function getList(){
        $all = Db::instance('test_qqtt_admin')->query('select * from msg_static_oem');


//        $data['code'] = 0;
//        $data['msg'] = 'this is my life';
//        $data['data'] = $all;
//
//        return Gateway::sendToCurrentClient(json_encode($data,JSON_UNESCAPED_UNICODE));

        return $all;
    }
}
