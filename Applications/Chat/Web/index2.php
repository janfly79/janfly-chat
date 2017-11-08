<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 2017/11/8
 * Time: 上午11:28
 */


class a{
    public function get_a(){
        echo 'this is a get_a function ';
    }
}


class b{
    public function get_b(){
        echo 'this is b get_b function ';
    }
}


class c{
    public function get_c(){
        echo 'this is c get_c functio ';
    }
}

function run(){
    echo 'this is my life'."<br />";
    $c = $_GET['c'];
    $a = $_GET['a'];
    $model = new $c();
    $model->$a();

}
run();