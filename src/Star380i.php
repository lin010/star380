<?php
namespace star380;

use star380\Clients\ClientBase;
use star380\Clients\FindBrandList;
use star380\Http\Request;

class Star380i{
    public static $gateway     = "https://openapi.380star.com";
    public static $gatewayTest = "http://pre-openapi.380star.com";

    private $appKey;
    private $appSecret;
    private $isTest;

    public function __construct($app_key, $app_secret, $is_test = false) {
        $this->appKey    = $app_key;
        $this->appSecret = $app_secret;
        $this->isTest    = $is_test;
    }

    /**
     * 设置接口基础参数
     * @param array $params
     * @return array
     */
    public function setBaseParams($params){
        $params["appKey"]      = $this->appKey;
        $params["currentTime"] = intval(1000 * microtime(true));
        $params["sign"]        = static::getSign($params, $this->appSecret);
        return $params;
    }

    /**
     * 发送请求
     * @param $url
     * @param $params
     * @return string
     */
    public function request(ClientBase $client){
        $params = $this->setBaseParams($client->getParams());
        $gateway = $this->isTest ? static::$gatewayTest : static::$gateway;
        $url = $gateway . "/" . ltrim($client->getMethod(), "/");
        $request = new Request();
        if($request->post($url, $params)){
            echo "response:" . $request->getResponseText();
        }else{
            echo "error:" . $request->getError();
        }
    }

    /**
     * 获取签名
     * @param array $params
     * @param string $appSecret
     * @return string
     */
    public static function getSign($params, $appSecret) {
        $newParams = array();
        foreach($params as $key => $value){
            if(trim($key) != "sign"){
                $value = urldecode($value);
                if(empty($value)) continue;
                $newParams[$key] = $value;
            }
        }
        ksort($newParams);
        $signStringArray = array();
        foreach($newParams as $key => $value){
            $signStringArray[] = "{$key}={$value}";
        }
        $signStringArray[] = $appSecret;
        $sign = md5(implode("&", $signStringArray));

        return $sign;
    }
}