<?php


namespace DesignPatterns\Behavioral\Strategy\Examples;


class OrderController
{
    private Payment $payment;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function auth($params)
    {
        $this->payment->auth($params);
    }

    public function pay($params)
    {
        $this->payment->pay($params);
    }

    public function refund($params)
    {
        $this->payment->refund($params);
    }

    public function notify($params)
    {
        $this->payment->notify($params);
    }
}