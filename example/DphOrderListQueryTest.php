<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\DphOrderClient;

/**
 * DPH 行動支付
 * 訂單日期區間查詢
 */
class DphOrderListQueryTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        $token = ExampleConst::TOKEN();
        $client = new DphOrderClient($token);
        $result = $client->DphOrderListQuery('您的帳號','2022-06-01', '2022-07-01');
        var_dump($result);
    }

}

$test = new DphOrderListQueryTest();
$test->test();