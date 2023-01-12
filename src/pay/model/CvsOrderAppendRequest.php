<?php
/**
 * ================================================
 * 日期: 2022/7/29
 *
 */

namespace Pay\model;

/**
 * 契客新增訂單
 */
class CvsOrderAppendRequest extends BaseModel
{
    public $cust_id;
    public $cust_order_no;
    public $order_amount;
    public $expire_date;
    public $payer_name;
    public $payer_postcode;

    public $payer_address;
    public $payer_mobile;
    public $payer_email;
    public $payment_type;
    public $payment_acquirerType = 0;
    public $apn_url;
    public $order_detail;


    /*********** 電子發票相關資訊 (未開通發票功能請忽略) start  **************/
    public $b2c;
    public $product_name;
    public $print_invoice;
    public $vehicle_type;
    public $vehicle_barcode;
    public $donate_invoice;
    public $love_code;
    public $buyer_bill_no;
    public $buyer_invoice_title;
    public $buyer_invoice_zip;
    public $buyer_invoice_addr;
    /*********** 電子發票相關資訊 (未開通發票功能請忽略) end  **************/

    /**
     * @param $cust_id
     * @param $cust_order_no
     * @param $order_amount
     * @param $expire_date
     * @param $payer_name
     * @param $payer_postcode
     * @param $payer_address
     * @param $payer_mobile
     * @param $payer_email
     * @param $payment_type
     * @param $payment_acquirerType
     */
    public function initData($cust_id, $cust_order_no, $order_amount, $expire_date, $payer_name, $payer_postcode, $payer_address, $payer_mobile, $payer_email, $payment_type, $payment_acquirerType)
    {
        $this->cust_id = $cust_id;
        $this->cust_order_no = $cust_order_no;
        $this->order_amount = $order_amount;
        $this->expire_date = $expire_date;
        $this->payer_name = $payer_name;
        $this->payer_postcode = $payer_postcode;
        $this->payer_address = $payer_address;
        $this->payer_mobile = $payer_mobile;
        $this->payer_email = $payer_email;
        $this->payment_type = $payment_type;
        $this->payment_acquirerType = $payment_acquirerType;
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
    public function getExpireDate()
    {
        return $this->expire_date;
    }

    /**
     * @param mixed $expire_date
     */
    public function setExpireDate($expire_date)
    {
        $this->expire_date = $expire_date;
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
    public function getPaymentType()
    {
        return $this->payment_type;
    }

    /**
     * @param mixed $payment_type
     */
    public function setPaymentType($payment_type)
    {
        $this->payment_type = $payment_type;
    }

    /**
     * @return mixed
     */
    public function getPaymentAcquirerType()
    {
        return $this->payment_acquirerType;
    }

    /**
     * @param mixed $payment_acquirerType
     */
    public function setPaymentAcquirerType($payment_acquirerType)
    {
        $this->payment_acquirerType = $payment_acquirerType;
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

    /**
     * @return mixed
     */
    public function getBuyerInvoiceZip()
    {
        return $this->buyer_invoice_zip;
    }

    /**
     * @param mixed $buyer_invoice_zip
     */
    public function setBuyerInvoiceZip($buyer_invoice_zip)
    {
        $this->buyer_invoice_zip = $buyer_invoice_zip;
    }

    /**
     * @return mixed
     */
    public function getBuyerInvoiceAddr()
    {
        return $this->buyer_invoice_addr;
    }

    /**
     * @param mixed $buyer_invoice_addr
     */
    public function setBuyerInvoiceAddr($buyer_invoice_addr)
    {
        $this->buyer_invoice_addr = $buyer_invoice_addr;
    }




}