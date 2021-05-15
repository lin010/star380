<?php
namespace star380\Clients\Goods;

/**
 * 预占商品库存
 * 请求参数：
 *  @property string $outOrderNo  第三方订单号 <= 32位
 *  @property string $codeInvList 商品及库存信息json, 参考下面的demo
 *  @property string $regionId    (限售商品必填)区域ID
 */
class PreHoldSkuInventory extends ClientBase
{
    function getMethod()
    {
        return "/goods/preHoldSkuInventory";
    }
}