<?php


namespace DesignPatterns\Behavioral\Strategy\Examples;


class AliPay implements Payment
{
    public function auth($params)
    {
        return 'https://mapi.alipay.com/gateway.do?action=auth';
    }

    public function pay($params)
    {
        return 'https://mapi.alipay.com/gateway.do?action=pay';
    }

    public function refund($params)
    {
        return 'https://mapi.alipay.com/gateway.do?action=refund';
    }

    public function notify($params)
    {
        return 'https://mapi.alipay.com/gateway.do?action=notify';
    }
}