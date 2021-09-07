<?php
define('ProPayPal', 0);
if(ProPayPal){
    define("PayPalClientId", "AdtZoH2X8rk776LFvUgtkmQ-tibxaXqWfGj0eF40-g61n8i6CcsVZxuh0Kz5tb09nypnSJrHQwvLwWMb");
    define("PayPalSecret", "ECVIolIoRuAncR6RVipqPdvBVOa4qgCmF_mqMifNqgtZS4oQjX0clYyqhJXOaYROBLZCfhaMHPnZq7fc");
    define("PayPalBaseUrl", "https://api.paypal.com/v1/");
    define("PayPalENV", "production");
} else {
    define("PayPalClientId", "AdtZoH2X8rk776LFvUgtkmQ-tibxaXqWfGj0eF40-g61n8i6CcsVZxuh0Kz5tb09nypnSJrHQwvLwWMb");
    define("PayPalSecret", "ECVIolIoRuAncR6RVipqPdvBVOa4qgCmF_mqMifNqgtZS4oQjX0clYyqhJXOaYROBLZCfhaMHPnZq7fc");
    define("PayPalBaseUrl", "https://api.sandbox.paypal.com/v1/");
    define("PayPalENV", "sandbox");
}
?>