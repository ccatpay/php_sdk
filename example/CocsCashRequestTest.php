<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;

/**
 * COCS 線上刷卡
 * 指定請款金額(部分請款、部分取消授權)
 */
class CocsCashRequestTest
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

        $date = date('Y-m-d H:i:s', time() + 8 * 3600);

        $result = $client->CocsCashRequest('您的帳號', 'COCSTEST20220825113853388',
            '100', '100',  $date);

        var_dump($result);
    }

}

$test = new CocsCashRequestTest();
$test->test();