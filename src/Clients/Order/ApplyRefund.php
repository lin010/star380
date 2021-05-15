<?php
namespace star380\Clients\Order;

/**
 * 退款申请
 * 【卖家未发货，使用退款申请接口】
 * 请求参数：
 *  @property string $orderSn 星链子订单sn
 *  @property string $reason  原因
 *  @property string $picList 退货上传图片URL集合, json格式 参考下面的demo
 */
class ApplyRefund extends ClientBase
{
    function getMethod()
    {
        return "/order/applyRefund";
    }
}