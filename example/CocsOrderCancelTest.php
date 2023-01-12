<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;

/**
 * COCS 線上刷卡
 * 訂單取消授權
 */
class CocsOrderCancelTest
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

        $result = $client->CocsOrderCancel('您的帳號', 'COCSTEST20220825113853322', '100', 'esun', date('Y-m-d H:i:s', time() + 8 * 3600));

        var_dump($result);
    }

}

$test = new CocsOrderCancelTest();
$test->test();