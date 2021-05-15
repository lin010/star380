<?php
namespace star380;


use star380\Clients\GetSpuIdList;

class GoodsStar380i extends Star380i{

    /**
     * 同步商品获取商品SpuId列表
     * @param array $params
     * @return array
     */
    public function getSpuIdList($params = array()){
        $client = new GetSpuIdList($params);
        return $this->request($client);
    }
}