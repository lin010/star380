<?php
namespace star380\Clients\Goods;

/**
 * 查询商品变更记录
 * 请求参数：
 *  @property string $pageIndex         页码，默认 1
 *  @property string $pageSize          每页大小，默认 500，最大1000
 *  @property string $changeDateStart   开始日期yyyy-MM-dd hh:mm:ss
 *  @property string $changeDateEnd     结束日期yyyy-MM-dd hh:mm:ss
 *  @property string $spuId             spuId
 *  @property string $recordType        记录类型 0:上架（新增）1:上架（变更） 2:下架
 */
class QueryProductChangeRecord extends ClientBase
{
    function getMethod()
    {
        return "/goods/queryProductChangeRecord";
    }
}