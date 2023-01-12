<?php
/**
 * ================================================
 * 日期: 2022/7/16
 *
 */

namespace Pay\utils;

class CurlTool
{
    public function request($url, $post = true, $postData = [], $isJson = false, $token = '')
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        if ($post) {
            curl_setopt($ch, CURLOPT_POST, 1);
        }
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $headers = [];
        if ($isJson) {
            $headers[] = 'Content-Type: application/json';
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
        } else {
            $headers[] = 'Content-Type: multipart/form-data';
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        }
        if (!empty($token)) {
            $headers[] = 'Authorization: Bearer ' . $token;
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $data = curl_exec($ch);
        curl_close($ch);
        return json_decode($data, true);
    }
}