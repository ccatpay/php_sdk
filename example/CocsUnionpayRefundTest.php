<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;


/**
 * COCS 線上刷卡
 * 訂單取消交易(退貨、退款)-玉山銀聯卡
 */
class CocsUnionpayRefundTest
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
        $result = $client->CocsUnionpayRefund('您的帳號', 'COCSTEST20220825113853389',
            '100', '100', date('Y-m-d H:i:s', time() + 8 * 3600));
        var_dump($result);
    }
}

$test = new CocsUnionpayRefundTest();
$test->test();