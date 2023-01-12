<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\DphOrderClient;

/**
 * DPH 行動支付
 * 訂單請款(僅支援 OPEN 錢包)
 */
class DphCashRequestTest
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

        $result = $client->DphCashRequest('您的帳號','DPHTEST20220624175112699', '100',
            '10', date('Y-m-d H:i:s', time() + 8 * 3600));

        var_dump($result);
    }

}

$test = new DphCashRequestTest();
$test->test();