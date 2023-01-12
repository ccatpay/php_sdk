<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\DphOrderClient;

/**
 * DPH 行動支付
 * 訂單取消交易(退貨、退款)
 */
class DphOrderRefundTest
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

        $result = $client->DphOrderRefund('您的帳號', 'DPHTEST20220624175112699',
            '100', 'opw', date('Y-m-d H:i:s', time() + 8 * 3600));

        var_dump($result);
    }

}

$test = new DphOrderRefundTest();
$test->test();