<?php
namespace star380\Clients\Goods;

/**
 * 同步商品获取商品SpuId列表
 * 请求参数：
 *  @property string  $pageIndex        页码，默认 1
 *  @property string  $pageSize         每页大小，默认 500，最大1000
 *  @property string  $createStartTime  选品开始时间，格式 为 'yyyy-MM-dd HH:mm:ss'
 *  @property string  $createEndTime    选品截止时间，格式 为 'yyyy-MM-dd HH:mm:ss'
 *  @property string  $firstCategoryId  一级分类ID
 *  @property string  $secondCategoryId 二级分类ID
 *  @property string  $thirdCategoryId  三级分类ID
 *  @property string  $brandId          品牌ID
 *  @property string  $status           商品状态： -1.全部，0.已上架，1.已下架，默认 0
 *  @property string  $hasVideo         商品是否含视频： -1、全部 1、只含视频，默认 -1
 */
class GetSpuIdList extends ClientBase
{
    function getMethod()
    {
        return "/goods/getSpuIdList";
    }
}