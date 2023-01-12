<?php
/**
 * ================================================
 * 日期: 2022/7/16
 *
 */

namespace Pay\api;

use Pay\model\CocsOrderAppend2Request;
use Pay\model\CocsOrderAppendRequest;

class CocsOrderClient extends BaseClient
{


    /**
     * 契客新增刷卡訂單
     * @param CocsOrderAppendRequest $request
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-08
     */
    public function CocsOrderAppend(CocsOrderAppendRequest $request)
    {
        $params = [
            "cmd" => "CocsOrderAppend"
        ];
        $params = array_merge($params, $request->toArray());
        return $this->baseCollect($params);
    }


    /**
     * 契客新增刷卡訂單-加值服務
     * @param CocsOrderAppend2Request $request
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-08
     */
    public function CocsOrderAppend2(CocsOrderAppend2Request $request)
    {
        $params = [
            "cmd" => "CocsOrderAppend2"
        ];
        $params = array_merge($params, $request->toArray());
        return $this->baseCollect($params);
    }

    /**
     * 訂單查詢
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-13
     */
    public function CocsOrderQuery($cust_id, $cust_order_no)
    {
        $params = [
            "cmd" => "CocsOrderQuery",
            "cust_id" => $cust_id,
            "cust_order_no" => $cust_order_no,
        ];
        return $this->baseCollect($params);
    }

    /**
     * 訂單日期區間查詢
     * @param $cust_id
     * @param $order_start_date
     * @param $order_end_date
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-07-29
     */
    public function CocsOrderListQuery($cust_id, $order_start_date, $order_end_date)
    {
        $params = [
            "cmd" => "CocsOrderListQuery",
            "cust_id" => $cust_id,
            "order_start_date" => $order_start_date,
            "order_end_date" => $order_end_date,
        ];
        return $this->baseCollect($params);
    }

    /**
     * 訂單取消授權
     * @param $cust_id
     * @param $cust_order_no
     * @param $order_amount
     * @param $acquirer_type
     * @param $send_time
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-13
     */
    public function CocsOrderCancel($cust_id, $cust_order_no, $order_amount, $acquirer_type, $send_time)
    {
        $params = [
            "cmd" => "CocsOrderCancel",
            "cust_id" => $cust_id,
            "cust_order_no" => $cust_order_no,
            "order_amount" => $order_amount,
            "acquirer_type" => $acquirer_type,
            "send_time" => $send_time,
        ];
        return $this->baseCollect($params);
    }

    /**
     * 訂單取消交易(退貨、退款)
     * @param $cust_id
     * @param $cust_order_no
     * @param $order_amount
     * @param $refund_amount
     * @param $acquirer_type
     * @param $send_time
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-13
     */
    public function CocsOrderRefund($cust_id, $cust_order_no, $order_amount, $refund_amount, $acquirer_type, $send_time)
    {
        $params = [
            "cmd" => "CocsOrderRefund",
            "cust_id" => $cust_id,
            "cust_order_no" => $cust_order_no,
            "order_amount" => $order_amount,
            "refund_amount" => $refund_amount,
            "acquirer_type" => $acquirer_type,
            "send_time" => $send_time,
        ];
        return $this->baseCollect($params);
    }

    /**
     * 指定請款金額(部分請款、部分取消授權)
     * @param $cust_id
     * @param $cust_order_no
     * @param $order_amount
     * @param $cr_amount
     * @param $send_time
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-13
     */
    public function CocsCashRequest($cust_id, $cust_order_no, $order_amount, $cr_amount, $send_time)
    {
        $params = [
            "cmd" => "CocsCashRequest",
            "cust_id" => $cust_id,
            "cust_order_no" => $cust_order_no,
            "order_amount" => $order_amount,
            "cr_amount" => $cr_amount,
            "send_time" => $send_time,
        ];
        return $this->baseCollect($params);
    }


    /**
     * 契客新增刷卡訂單-玉山銀聯卡
     * @param $cust_id
     * @param $cust_order_no
     * @param $order_amount
     * @param $order_detail
     * @param $send_time
     * @param $success_url
     * @param string $apn_url
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-13
     */
     public function CocsUnionpayAppend($cust_id, $cust_order_no, $order_amount, $order_detail, $send_time, $success_url = '', $apn_url = '')
    {
        $params = [
            "cmd" => "CocsUnionpayAppend",
            "cust_id" => $cust_id,
            "cust_order_no" => $cust_order_no,
            "order_amount" => $order_amount,
            "order_detail" => $order_detail,
            "send_time" => $send_time,
            "success_url" => $success_url,
            "apn_url" => $apn_url,
        ];
        return $this->baseCollect($params);
    }

    /**
     * 訂單取消交易(退貨、退款)-玉山銀聯卡
     * @param $cust_id
     * @param $cust_order_no
     * @param $order_amount
     * @param $refund_amount
     * @param $send_time
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-13
     */
    public function CocsUnionpayRefund($cust_id, $cust_order_no, $order_amount, $refund_amount, $send_time)
    {
        $params = [
            "cmd" => "CocsUnionpayRefund",
            "cust_id" => $cust_id,
            "cust_order_no" => $cust_order_no,
            "order_amount" => $order_amount,
            "refund_amount" => $refund_amount,
            "send_time" => $send_time,
        ];
        return $this->baseCollect($params);
    }

}