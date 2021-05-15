<?php
namespace star380\Clients\Order;

/**
 * 确认收货
 * 买家确认收货通知我方，只有在订单状态为已发货的情况下，才允许发起，其他状态不允许
 * 请求参数：
 *  @property string $orderSn 星链子订单sn
 */
class ConfirmOrder extends ClientBase
{
    function getMethod()
    {
        return "/order/confirmOrder";
    }
}