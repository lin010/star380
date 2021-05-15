<?php
namespace star380\Clients\Order;

/**
 * 订单物流信息
 * 请求参数：
 *  @property string $orderSn 星链子订单sn
 */
class FindExpressInfoByOrderSn extends ClientBase
{
    function getMethod()
    {
        return "/order/findExpressInfoByOrderSn";
    }
}