<?php
namespace star380\Clients\Goods;

/**
 * 查询品牌列表
 * 请求参数：
 *  @property integer  $pageIndex 当前页 默认第一页
 *  @property pageSize $pageSize  每页大小，默认 100 最大500
 */
class FindBrandList extends ClientBase
{
    function getMethod()
    {
        return "/goods/findBrandList";
    }

}