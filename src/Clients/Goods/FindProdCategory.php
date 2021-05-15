<?php
namespace star380\Clients\Goods;

/**
 * 查询分类信息
 * 请求参数：
 *  @property string $categoryId 分类ID,不传则查询所有一级分类,反之则查询该分类下的子分类信息
 */
class FindProdCategory extends ClientBase
{
    function getMethod()
    {
        return "/goods/findProdCategory";
    }
}