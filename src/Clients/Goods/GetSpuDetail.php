<?php
namespace star380\Clients\Goods;

/**
 * 查询SPU详情【不包含sku列表】
 * 请求参数：
 *  @property string $spuIds 一次最多请求50个spu，超过按50个算，用英文逗号分隔
 */
class GetSpuDetail extends ClientBase
{
    function getMethod()
    {
        return "/goods/getSpuDetail";
    }
}