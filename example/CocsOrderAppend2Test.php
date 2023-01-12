<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;
use Pay\model\CocsOrderAppend2Request;

/**
 * COCS 線上刷卡
 * 契客新增刷卡訂單-加值服務
 */
class CocsOrderAppend2Test
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

        $request = new CocsOrderAppend2Request();
        $request->initData('您的帳號',
            'COCSTEST'.date('YmdHis').rand(100, 999),
            '100',
            '111',
            'YY',
            '0123812312',
            'ffff@gmail.com',
            'esun',
            '',
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
        $result = $client->CocsOrderAppend2($request);

        var_dump($result);
    }

}

$test = new CocsOrderAppend2Test();
$test->test();