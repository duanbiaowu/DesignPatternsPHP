<?php


namespace DesignPatterns\Behavioral\Strategy\Examples;


interface Payment
{
    public function auth($params);

    public function pay($params);

    public function refund($params);

    public function notify($params);
}