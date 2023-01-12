<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\OrderClient;

/**
 * CVS 代收代付
 * 變更 ibon 繳款金額
 */
class CvsIbonUpdateTest
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

        $result = $client->CvsIbonUpdate('您的帳號', '20145021500654741',
            '100', 'CCAT', '228306634703');

        var_dump($result);
    }

}

$test = new CvsIbonUpdateTest();
$test->test();