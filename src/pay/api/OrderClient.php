<?php
/**
 * ================================================
 * 日期: 2022/7/16
 *
 */

namespace Pay\api;

use Pay\model\CvsOrderAppendRequest;

class OrderClient extends BaseClient
{


    /**
     * 契客新增訂單
     * @param CvsOrderAppendRequest $request
     * @param $token
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-07-29
     */
    public function CvsOrderAppend(CvsOrderAppendRequest $request)
    {
        $params = [
            "cmd" => "CvsOrderAppend"
        ];
        $params = array_merge($params, $request->toArray());
        return $this->baseCollect($params);
    }

    /**
     * 訂單查詢
     * @param $cust_id
     * @param $cust_order_no
     * @param $token
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-07-29
     */
    public function CvsOrderQuery($cust_id, $cust_order_no) {
        $params = [
            "cmd" => "CvsOrderQuery",
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
    public function CvsOrderListQuery($cust_id, $order_start_date, $order_end_date) {
        $params = [
            "cmd" => "CvsOrderListQuery",
            "cust_id" => $cust_id,
            "order_start_date" => $order_start_date,
            "order_end_date" => $order_end_date,
        ];
        return $this->baseCollect($params);
    }

    /**
     * 變更 ibon 繳款金額
     * @param $cust_id
     * @param $cust_order_no
     * @param $order_amount
     * @param $ibon_shopid
     * @param $ibon_code
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-08
     */
    public function CvsIbonUpdate($cust_id, $cust_order_no, $order_amount, $ibon_shopid, $ibon_code)
    {
        $params = [
            "cmd" => "CvsIbonUpdate",
            "cust_id" => $cust_id,
            "cust_order_no" => $cust_order_no,
            "order_amount" => $order_amount,
            "ibon_shopid" => $ibon_shopid,
            "ibon_code" => $ibon_code,
        ];
        return $this->baseCollect($params);
    }

    /**
     * 變更 ibon 繳款到期日
     * @param $cust_id
     * @param $cust_order_no
     * @param $order_amount
     * @param $expire_date
     * @param $ibon_shopid
     * @param $ibon_code
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-08
     */
    public function CvsIbonUpdateDate($cust_id, $cust_order_no, $order_amount, $expire_date, $ibon_shopid, $ibon_code)
    {
        $nonce = date('His') . rand(1000, 9999);
        $params = [
            "cmd" => "CvsIbonUpdateDate",
            "cust_id" => $cust_id,
            "cust_order_no" => $cust_order_no,
            "order_amount" => $order_amount,
            "expire_date" => $expire_date,
            "ibon_shopid" => $ibon_shopid,
            "ibon_code" => $ibon_code,
            "nonce" => $nonce,
            "checksum" => md5($cust_order_no . ':' . $order_amount . ':' . $nonce)
        ];
        return $this->baseCollect($params);
    }


}