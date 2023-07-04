# PHP_SDK
多元支付平台SDK

提供您整合黑貓pay統一客樂得多元支付平台相關服務，支援服務如下:
* [CVS代收代付](https://github.com/ccatpay/PHP_SDK/blob/main/src/pay/api/OrderClient.php)
* [COCS線上刷卡](https://github.com/ccatpay/PHP_SDK/blob/main/src/pay/api/CocsOrderClient.php)
* [DPH行動支付](https://github.com/ccatpay/PHP_SDK/blob/main/src/pay/api/DphOrderClient.php)
* [主檔管理](https://github.com/ccatpay/PHP_SDK/blob/main/src/pay/api/SmsClient.php)
* [用戶驗證](https://github.com/ccatpay/PHP_SDK/blob/main/src/pay/api/LoginClient.php)

# 環境需求
 * PHP: ^5.6 || ^7.0 || ^8.0

# 安裝
建議使用 Composer 安裝
```
 composer require ccatpay/php_sdk
```
# 使用
請參考 [範例](https://github.com/ccatpay/PHP_SDK/tree/main/example) 

錯誤碼及api具體說明 請參考[串接文件](https://www.ccat.com.tw/Home/Download#Manual) 或者聯繫相關開發人員
