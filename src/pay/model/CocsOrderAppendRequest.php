<?php
/**
 * ================================================
 * 日期: 2022/8/8
 *
 */

namespace Pay\model;

class CocsOrderAppendRequest  extends BaseModel
{
    public $cust_id;
    public $cust_order_no;
    public $order_amount;
    public $order_detail;
    public $acquirer_type;
    public $limit_product_id;
    public $send_time;
    public $success_url;
    public $apn_url;

    /*********** 電子發票相關資訊 (未開通發票功能請忽略) start  **************/
    public $b2c;
    public $product_name;
    public $print_invoice;
    public $vehicle_type;
    public $vehicle_barcode;
    public $donate_invoice;
    public $love_code;
    public $payer_name;
    public $payer_postcode;
    public $payer_address;
    public $payer_mobile;
    public $payer_email;
    public $buyer_bill_no;
    public $buyer_invoice_title;
    /*********** 電子發票相關資訊 (未開通發票功能請忽略) end  **************/
    /**
     * @param $cust_id
     * @param $cust_order_no
     * @param $order_amount
     * @param $order_detail
     * @param $acquirer_type
     * @param $limit_product_id
     * @param $send_time
     * @param $success_url
     * @param $apn_url
     */
    public function initData($cust_id, $cust_order_no, $order_amount, $order_detail, $acquirer_type, $limit_product_id, $send_time)
    {
        $this->cust_id = $cust_id;
        $this->cust_order_no = $cust_order_no;
        $this->order_amount = $order_amount;
        $this->order_detail = $order_detail;
        $this->acquirer_type = $acquirer_type;
        $this->limit_product_id = $limit_product_id;
        $this->send_time = $send_time;
    }


    /**
     * @return mixed
     */
    public function getCustId()
    {
        return $this->cust_id;
    }

    /**
     * @param mixed $cust_id
     */
    public function setCustId($cust_id)
    {
        $this->cust_id = $cust_id;
    }

    /**
     * @return mixed
     */
    public function getCustOrderNo()
    {
        return $this->cust_order_no;
    }

    /**
     * @param mixed $cust_order_no
     */
    public function setCustOrderNo($cust_order_no)
    {
        $this->cust_order_no = $cust_order_no;
    }

    /**
     * @return mixed
     */
    public function getOrderAmount()
    {
        return $this->order_amount;
    }

    /**
     * @param mixed $order_amount
     */
    public function setOrderAmount($order_amount)
    {
        $this->order_amount = $order_amount;
    }

    /**
     * @return mixed
     */
    public function getOrderDetail()
    {
        return $this->order_detail;
    }

    /**
     * @param mixed $order_detail
     */
    public function setOrderDetail($order_detail)
    {
        $this->order_detail = $order_detail;
    }

    /**
     * @return mixed
     */
    public function getAcquirerType()
    {
        return $this->acquirer_type;
    }

    /**
     * @param mixed $acquirer_type
     */
    public function setAcquirerType($acquirer_type)
    {
        $this->acquirer_type = $acquirer_type;
    }

    /**
     * @return mixed
     */
    public function getLimitProductId()
    {
        return $this->limit_product_id;
    }

    /**
     * @param mixed $limit_product_id
     */
    public function setLimitProductId($limit_product_id)
    {
        $this->limit_product_id = $limit_product_id;
    }

    /**
     * @return mixed
     */
    public function getSendTime()
    {
        return $this->send_time;
    }

    /**
     * @param mixed $send_time
     */
    public function setSendTime($send_time)
    {
        $this->send_time = $send_time;
    }

    /**
     * @return mixed
     */
    public function getSuccessUrl()
    {
        return $this->success_url;
    }

    /**
     * @param mixed $success_url
     */
    public function setSuccessUrl($success_url)
    {
        $this->success_url = $success_url;
    }

    /**
     * @return mixed
     */
    public function getApnUrl()
    {
        return $this->apn_url;
    }

    /**
     * @param mixed $apn_url
     */
    public function setApnUrl($apn_url)
    {
        $this->apn_url = $apn_url;
    }

    /**
     * @return mixed
     */
    public function getB2c()
    {
        return $this->b2c;
    }

    /**
     * @param mixed $b2c
     */
    public function setB2c($b2c)
    {
        $this->b2c = $b2c;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @param mixed $product_name
     */
    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
    }

    /**
     * @return mixed
     */
    public function getPrintInvoice()
    {
        return $this->print_invoice;
    }

    /**
     * @param mixed $print_invoice
     */
    public function setPrintInvoice($print_invoice)
    {
        $this->print_invoice = $print_invoice;
    }

    /**
     * @return mixed
     */
    public function getVehicleType()
    {
        return $this->vehicle_type;
    }

    /**
     * @param mixed $vehicle_type
     */
    public function setVehicleType($vehicle_type)
    {
        $this->vehicle_type = $vehicle_type;
    }

    /**
     * @return mixed
     */
    public function getVehicleBarcode()
    {
        return $this->vehicle_barcode;
    }

    /**
     * @param mixed $vehicle_barcode
     */
    public function setVehicleBarcode($vehicle_barcode)
    {
        $this->vehicle_barcode = $vehicle_barcode;
    }

    /**
     * @return mixed
     */
    public function getDonateInvoice()
    {
        return $this->donate_invoice;
    }

    /**
     * @param mixed $donate_invoice
     */
    public function setDonateInvoice($donate_invoice)
    {
        $this->donate_invoice = $donate_invoice;
    }

    /**
     * @return mixed
     */
    public function getLoveCode()
    {
        return $this->love_code;
    }

    /**
     * @param mixed $love_code
     */
    public function setLoveCode($love_code)
    {
        $this->love_code = $love_code;
    }

    /**
     * @return mixed
     */
    public function getPayerName()
    {
        return $this->payer_name;
    }

    /**
     * @param mixed $payer_name
     */
    public function setPayerName($payer_name)
    {
        $this->payer_name = $payer_name;
    }

    /**
     * @return mixed
     */
    public function getPayerPostcode()
    {
        return $this->payer_postcode;
    }

    /**
     * @param mixed $payer_postcode
     */
    public function setPayerPostcode($payer_postcode)
    {
        $this->payer_postcode = $payer_postcode;
    }

    /**
     * @return mixed
     */
    public function getPayerAddress()
    {
        return $this->payer_address;
    }

    /**
     * @param mixed $payer_address
     */
    public function setPayerAddress($payer_address)
    {
        $this->payer_address = $payer_address;
    }

    /**
     * @return mixed
     */
    public function getPayerMobile()
    {
        return $this->payer_mobile;
    }

    /**
     * @param mixed $payer_mobile
     */
    public function setPayerMobile($payer_mobile)
    {
        $this->payer_mobile = $payer_mobile;
    }

    /**
     * @return mixed
     */
    public function getPayerEmail()
    {
        return $this->payer_email;
    }

    /**
     * @param mixed $payer_email
     */
    public function setPayerEmail($payer_email)
    {
        $this->payer_email = $payer_email;
    }

    /**
     * @return mixed
     */
    public function getBuyerBillNo()
    {
        return $this->buyer_bill_no;
    }

    /**
     * @param mixed $buyer_bill_no
     */
    public function setBuyerBillNo($buyer_bill_no)
    {
        $this->buyer_bill_no = $buyer_bill_no;
    }

    /**
     * @return mixed
     */
    public function getBuyerInvoiceTitle()
    {
        return $this->buyer_invoice_title;
    }

    /**
     * @param mixed $buyer_invoice_title
     */
    public function setBuyerInvoiceTitle($buyer_invoice_title)
    {
        $this->buyer_invoice_title = $buyer_invoice_title;
    }




}