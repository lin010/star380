<?php
namespace star380\Clients\Order;

/**
 * 退货退款申请
 * 【卖家已发货，使用退货退款申请接口，针对单个商品全部退】
 * 请求参数：
 *  @property string $orderSn     星链子订单sn
 *  @property string $code        商品编码
 *  @property string $reason      原因
 *  @property string $returnType  退货类型，0：退货退款，1：仅退款
 *  @property string $applyAmount 自定义退款金额
 *  @property string $picList     退货上传图片URL集合, json格式 参考下面的demo
 */
class ApplyRefundAndGoods extends ClientBase
{
    function getMethod()
    {
        return "/order/applyRefundAndGoods";
    }
}