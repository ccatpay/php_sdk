<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\DphOrderClient;
use Pay\model\DphOrderAppendRequest;

/**
 * DPH 行動支付
 * 契客新增行動支付訂單
 */
class DphOrderAppendTest
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

        $request = new DphOrderAppendRequest();
        $request->initData('您的帳號',
            'DPHTEST' . date('YmdHis') . rand(100, 999),
            '100',
            '',
            'pay',
            'opw',
            date('Y-m-d H:i:s', time() + 8 * 3600));

        // 帶電子發票相關參數, 如果不需要測試發票，即可刪除以下代碼
        $request->setB2c(1);
        $request->setProductName("iPhone");
        $request->setPrintInvoice(1);
        $request->setVehicleBarcode(0);
        $request->setDonateInvoice(0);
        $request->setPayerAddress("台北");
        $request->setPayerMobile("0970325698");
        $request->setPayerEmail("abc@gmail.com");


        $result = $client->DphOrderAppend($request);

        var_dump($result);
    }

}

$test = new DphOrderAppendTest();
$test->test();