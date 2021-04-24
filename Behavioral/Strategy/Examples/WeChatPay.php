<?php


namespace DesignPatterns\Behavioral\Strategy\Examples;


class WeChatPay implements Payment
{
    public function auth($params)
    {
        return 'https://api.mch.weixin.qq.com/papay/querycontract?action=auth';
    }

    public function pay($params)
    {
        return 'https://api.mch.weixin.qq.com/papay/querycontract?action=pay';
    }

    public function refund($params)
    {
        return 'https://api.mch.weixin.qq.com/papay/querycontract?action=refund';
    }

    public function notify($params)
    {
        return 'https://api.mch.weixin.qq.com/papay/querycontract?action=notify';
    }
}