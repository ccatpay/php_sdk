<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\DphOrderClient;

/**
 * DPH 行動支付
 * 訂單查詢
 */
class DphOrderQueryTest
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

        $result = $client->DphOrderQuery('您的帳號','DPHTEST20220624175112699');

        var_dump($result);
    }

}

$test = new DphOrderQueryTest();
$test->test();