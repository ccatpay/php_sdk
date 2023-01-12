<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\OrderClient;
use Pay\model\CvsOrderAppendRequest;

/**
 * CVS 代收代付
 * 契客新增訂單
 */
class CvsOrderAppendTest
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

        $request = new CvsOrderAppendRequest();

        $request->initData("您的帳號",
            'Cvs'.date('YmdHis').rand(100, 999),
            '2022',
            '2022-10-10',
            '王大',
            '115',
            '台北',
            '0900123123',
            'yanlee@bankpro.com.tw',
            '0',
            '');

        // 帶電子發票相關參數, 如果不需要測試發票，即可刪除以下代碼
        $request->setB2c(1);
        $request->setProductName("iPhone");
        $request->setPrintInvoice(1);
        $request->setVehicleBarcode(0);
        $request->setDonateInvoice(0);
        $request->setPayerAddress("台北");
        $request->setPayerMobile("0970325698");
        $request->setPayerEmail("abc@gmail.com");

        $result = $client->CvsOrderAppend($request);

        var_dump($result);
    }

}

$test = new CvsOrderAppendTest();
$test->test();