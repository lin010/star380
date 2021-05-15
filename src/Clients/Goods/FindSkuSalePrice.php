<?php
namespace star380\Clients\Goods;

/**
 * 查询商品价格
 * 请求参数：
 *  @property string $codes 最多查200个,code 多个以英文逗号拼接
 */
class FindSkuSalePrice extends ClientBase
{
    function getMethod()
    {
        return "/goods/findSkuSalePrice";
    }
}