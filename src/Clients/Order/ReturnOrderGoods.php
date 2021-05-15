<?php
namespace star380\Clients\Order;

/**
 * 买家发货
 * 卖家审核通过后，买家发货,物流公司需要按上面那个接口的数据提供
 * 请求参数：
 *  @property string $orderSn          星链子订单sn
 *  @property string $serviceSn        退款订单编号
 *  @property string $deliveryCorpSn   物流公司编码（物流公司信息ID）
 *  @property string $deliveryCorpName 物流公司名称（物流公司信息名称）
 *  @property string $deliverySn       物流单号
 */
class ReturnOrderGoods extends ClientBase
{
    function getMethod()
    {
        return "/order/returnOrderGoods";
    }
}