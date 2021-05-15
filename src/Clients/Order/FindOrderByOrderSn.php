<?php
namespace star380\Clients\Order;

/**
 * 订单详情
 * 请求参数：
 *  @property string $orderSn 星链子订单sn
 */
class FindOrderByOrderSn extends ClientBase
{
    function getMethod()
    {
        return "/order/findOrderByOrderSn";
    }
}