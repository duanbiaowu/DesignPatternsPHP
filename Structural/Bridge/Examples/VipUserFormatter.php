<?php


namespace DesignPatterns\Structural\Bridge\Examples;


class VipUserFormatter implements UserFormatter
{
    public function format(string $name): string
    {
        return 'Vip User: ' . $name;
    }
}