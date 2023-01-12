<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\OrderClient;

/**
 * CVS 代收代付
 * 訂單查詢
 */
class CvsOrderQueryTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        $token = ExampleConst::TOKEN();
        $client = new OrderClient($token);

        $result = $client->CvsOrderQuery('您的帳號', '20145021500654741');

        var_dump($result);
    }

}

$test = new CvsOrderQueryTest();
$test->test();