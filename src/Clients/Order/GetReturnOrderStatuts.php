<?php
namespace star380\Clients\Order;

/**
 * 查询退货退款状态
 * 请求参数：
 *  @property string $serviceSn 退款单编号
 */
class GetReturnOrderStatuts extends ClientBase
{
    function getMethod()
    {
        return "/order/getReturnOrderStatuts";
    }
}