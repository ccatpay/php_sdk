<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;
use Pay\model\CocsOrderAppendRequest;

/**
 * COCS 線上刷卡
 * 契客新增刷卡訂單
 */
class CocsOrderAppendTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        $token = ExampleConst::TOKEN();
        echo $token;
        $client = new CocsOrderClient($token);

        $request = new CocsOrderAppendRequest();
        $request->initData('您的帳號',
            'COCSTEST'.date('YmdHis').rand(100, 999),
            '100',
            '111',
            'esun',
            '0123812312',
            date('Y-m-d H:i:s', time() + 8 * 3600));
        // 帶電子發票相關參數, 如果不需要測試發票，即可刪除以下代碼
        $request->setB2c(1);
        $request->setPayerName("love");
        $request->setProductName("iPhone");
        $request->setPrintInvoice(1);
        $request->setVehicleBarcode(0);
        $request->setDonateInvoice(0);
        $request->setPayerAddress("台北");
        $request->setPayerMobile("0970325698");
        $request->setPayerEmail("abc@gmail.com");

        $result = $client->CocsOrderAppend($request);

        var_dump($result);
    }

}

$test = new CocsOrderAppendTest();
$test->test();