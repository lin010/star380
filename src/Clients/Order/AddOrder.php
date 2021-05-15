<?php
namespace star380\Clients\Order;

/**
 * 订单下单，下单失败时可能是因为库存不足，或者商品下架
 *  1：【必须先预占库存才能下单】
 *  2：【预占库存到下单到我方，需在30分内，超时则预占库存失效，需重新生成订单，预占库存下单】
 * 请求参数：
 *  @property string $outOrderNo      第三方订单号 <= 32位
 *  @property string $regionId        区域ID
 *  @property string $receiverAddr    收货人详细地址
 *  @property string $receiver        收货人
 *  @property string $receiverPhone   收货人电话
 *  @property string $receiverMobile  收货人手机号
 *  @property string $freight         非必填 不填为 0.00 运费，最长十位 整数8位小数2位
 *  @property string $buyerRemark     买家备注
 *  @property string $sellerRemark    卖家备注
 *  @property string $skuList         商品列表 json 串，格式参考下面json
 *  @property string $idcardName      用户身份证姓名(订单商品为海淘商品时必填)
 *  @property string $idcardNo        用户身份证号码(订单商品为海淘商品时必填)
 *  @property string $idcardFirstUrl  用户身份证正面照地址(订单商品为海淘商品时必填)
 *  @property string $idcardSecondUrl 用户身份证反面照地址(订单商品为海淘商品时必填)
 */
class AddOrder extends ClientBase
{
    function getMethod()
    {
        return "/order/addOrder";
    }
}