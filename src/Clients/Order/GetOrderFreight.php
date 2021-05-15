<?php
namespace star380\Clients\Order;

/**
 * 订单运费查询
 * 请求参数：
 *  @property string $regionId     区域ID
 *  @property string $receiverAddr 收货人详细地址
 *  @property string $skuList      商品列表 json 串，格式参考下面json
 */
class GetOrderFreight extends ClientBase
{
    function getMethod()
    {
        return "/order/getOrderFreight";
    }
}