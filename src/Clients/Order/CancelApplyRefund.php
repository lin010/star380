<?php
namespace star380\Clients\Order;

/**
 * 取消退货退款申请
 * 请求参数：
 *  @property string $orderSn   星链子订单sn
 *  @property string $serviceSn 退款订单编号
 *  @property string $reason    原因
 *  @property string $type      1：取消退款，2：取消退货退款
 */
class CancelApplyRefund extends ClientBase
{
    function getMethod()
    {
        return "/order/cancelApplyRefund";
    }
}