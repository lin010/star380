<?php
namespace app\component\star380;


class ApiDemo{

    public static $appKey = "ydxxxxxxxxxxxxxxxx";
    public static $appSecret = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
    public static $baseUrl = "http://pre-openapi.380star.com/";

    public static function test(){
        static::findBrandList();
    }

    /**
     * 查询品牌列表
     * @param int $pageIndex 当前页 默认第一页
     * @param int $pageSize  每页大小，默认 100 最大500
     * @return
     */
    private static function findBrandList(){
        $method = "/goods/findBrandList";
        $params["pageIndex"] = "1";
        $params["pageSize"]  = "2";
        return static::httpPost(static::$baseUrl . $method, static::setBaseParams($params));
    }

    /**
     * 设置接口基础参数
     * @param array $params
     * @return array
     */
    private static function setBaseParams($params){
        $params["appKey"] = static::$appKey;
        $params["currentTime"] = time();
        $params["sign"] = static::getSign($params, static::$appSecret);
        return $params;
    }


    private static function httpPost($url, $params){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // 跳过检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // 跳过检查
        curl_setopt($ch, CURLOPT_VERBOSE, false);

        $resText = curl_exec($ch);

        $error = curl_error($ch);
        $errno = curl_errno($ch);

        @curl_close($ch);

        echo $resText;
        exit;
    }

    /**
     * 获取签名
     * @param array $params
     * @param string $appSecret
     * @return
     */
    public static function getSign($params, $appSecret) {
        $newParams = [];
        foreach($params as $key => $value){
            if(trim($key) != "sign"){
                $value = urldecode($value);
                if(empty($value)) continue;
                $newParams[$key] = $value;
            }
        }
        ksort($newParams);
        $signStringArray = [];
        foreach($newParams as $key => $value){
            $signStringArray[] = "{$key}={$value}";
        }
        $signStringArray[] = $appSecret;
        $sign = md5(implode("&", $signStringArray));

        return $sign;
    }
}