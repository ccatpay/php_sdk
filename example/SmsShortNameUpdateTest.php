<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\SmsClient;

/**
 * 主檔管理
 * 變更金流服務簡訊簡稱
 */
class SmsShortNameUpdateTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        $token = ExampleConst::TOKEN();
        $client = new SmsClient($token);
        $result = $client->SmsShortNameUpdate('您的帳號', '0', 'E貓哥UAT1');
        var_dump($result);
    }

}

$test = new SmsShortNameUpdateTest();
$test->test();