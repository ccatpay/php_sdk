<?php
/**
 * ================================================
 * 日期: 2022/8/13
 *
 */

namespace Pay\api;

use Pay\consts\ApiConst;
use Pay\consts\SDKConst;
use Pay\utils\CurlTool;

class BaseClient
{
    protected $curl;

    protected $token;

    public function __construct($token)
    {
        $this->curl = new CurlTool();
        $this->token = $token;
    }

    public function baseCollect($requestParams)
    {
        $url = SDKConst::API_DEV_HOST . ApiConst::Collect;
        return $this->curl->request($url, true, $requestParams, true, $this->token);
    }
}