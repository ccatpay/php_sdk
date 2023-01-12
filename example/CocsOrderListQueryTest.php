<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;

/**
 * COCS 線上刷卡
 * 訂單日期區間查詢
 */
class CocsOrderListQueryTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        $token = ExampleConst::TOKEN();
        $client = new CocsOrderClient($token);

        $result = $client->CocsOrderListQuery('您的帳號', '2022-06-28', '2022-07-01');

        echo json_encode($result);
        var_dump($result);
    }

}

$test = new CocsOrderListQueryTest();
$test->test();