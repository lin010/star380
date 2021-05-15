<?php
namespace star380\Http;

class Request{

    private $error;
    private $responseText;

    /**
     * @param $url
     * @param $data
     */
    public function post($url, $data){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // 跳过检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // 跳过检查
        curl_setopt($ch, CURLOPT_VERBOSE, false);

        try {
            $resText = curl_exec($ch);
            $error = curl_error($ch);
            if(!empty($error)){
                throw new \Exception($error);
            }
        }catch (\Exception $e){
            $this->error = $e->getMessage();
        }

        @curl_close($ch);

        $this->responseText = $resText;

        return empty($this->error) ? true : false;
    }

    public function getError(){
        return $this->error;
    }

    public function getResponseText(){
        return $this->responseText;
    }
}