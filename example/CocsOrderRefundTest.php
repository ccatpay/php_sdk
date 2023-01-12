<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;

/**
 * COCS 線上刷卡
 * 訂單取消交易(退貨、退款)
 */
class CocsOrderRefundTest
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

        $result = $client->CocsOrderRefund('您的帳號', 'COCSTEST20220825113853388',
            '100', '99', 'esun', date('Y-m-d H:i:s', time() + 8 * 3600));

        var_dump($result);
    }

}

$test = new CocsOrderRefundTest();
$test->test();