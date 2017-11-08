<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 2017/11/8
 * Time: 下午2:38
 */
namespace Services;

use \GatewayWorker\Lib\Gateway;
use \GatewayWorker\Lib\Db;


class Blackiplog{
    public static function getList(){
        $all = Db::instance('test_qqtt_admin')->query('select * from black_ip_log');


//        $data['code'] = 0;
//        $data['msg'] = 'this is my life';
//        $data['data'] = $all;
//
//        return Gateway::sendToCurrentClient(json_encode($data,JSON_UNESCAPED_UNICODE));

        return $all;
    }
}
