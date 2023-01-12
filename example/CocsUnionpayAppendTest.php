<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;

/**
 * COCS 線上刷卡
 * 契客新增刷卡訂單-玉山銀聯卡
 */
class CocsUnionpayAppendTest
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

        $result = $client->CocsUnionpayAppend('您的帳號', 'COCSTEST20220825113853389',
            '100', '2022', date('Y-m-d H:i:s', time() + 8 * 3600));

        var_dump($result);
    }

}

$test = new CocsUnionpayAppendTest();
$test->test();