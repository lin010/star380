<?php
namespace star380\Clients;

abstract class ClientBase
{
    public $params;

    function __set($key, $value){
        $this->params[$key] = $value;
    }

    function __construct($params = array()){
        $this->params = $params;
    }

    /**
     * 获取请求方法
     * @return string
     */
    abstract function getMethod();

    /**
     * 获取请求参数
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }
}