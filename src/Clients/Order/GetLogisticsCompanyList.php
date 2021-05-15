<?php
namespace star380\Clients\Order;

/**
 * 查询物流公司信息
 */
class GetLogisticsCompanyList extends ClientBase
{
    function getMethod()
    {
        return "/order/getLogisticsCompanyList";
    }
}