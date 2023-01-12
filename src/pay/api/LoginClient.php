<?php
/**
 * ================================================
 * 日期: 2022/7/16
 *
 */

namespace Pay\api;

use Pay\consts\ApiConst;
use Pay\consts\SDKConst;
use Pay\utils\CurlTool;

class LoginClient
{
    protected $curl;

    public function __construct()
    {
        $this->curl = new CurlTool();
    }


    /**
     * login to get token
     * @param $username
     * @param $password
     * @return bool|string
     * @author will <zhiwupei@gmail.com>
     * @since  2022-07-16
     */
    public function getToken($username, $password)
    {
        $url = SDKConst::API_DEV_HOST . ApiConst::Token;
        $params = ['username' => $username, 'password' => $password, 'grant_type' => 'password'];
        return $this->curl->request($url, true, $params);
    }

}