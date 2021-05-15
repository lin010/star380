<?php
namespace star380\Clients\Order;

/**
 * 第三方订单号查询
 * 订单详情
 * 请求参数：
 *  @property string $outOrderNo 第三方订单号
 */
class FindOrderByOutOrderNo extends ClientBase
{
    function getMethod()
    {
        return "/order/findOrderByOutOrderNo";
    }
}