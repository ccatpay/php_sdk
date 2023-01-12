<?php
/**
 * ================================================
 * 日期: 2022/8/13
 *
 */

namespace Pay\api;

class SmsClient extends BaseClient
{
    /**
     * 變更金流服務簡訊簡稱
     * @param $cust_id
     * @param $service_type
     * @param $sms_short_name
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-13
     */
    public function SmsShortNameUpdate($cust_id, $service_type, $sms_short_name) {
        $params = [
            "cmd" => "SmsShortNameUpdate",
            "cust_id" => $cust_id,
            "service_type" => $service_type,
            "sms_short_name" => $sms_short_name,
        ];
        return $this->baseCollect($params);
    }
}