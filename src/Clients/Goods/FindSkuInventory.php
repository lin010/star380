<?php
namespace star380\Clients\Goods;

/**
 * 查询商品库存
 * 请求参数：
 *  @property string $areaId 区域ID 省市区唯一ID, 使用英文逗号拼接
 *  @property string $codes 最多查200个,code 多个以英文逗号拼接
 */
class FindSkuInventory extends ClientBase
{
    function getMethod()
    {
        return "/goods/findSkuInventory";
    }
}