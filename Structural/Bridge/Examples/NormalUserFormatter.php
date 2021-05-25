<?php


namespace DesignPatterns\Structural\Bridge\Examples;


class NormalUserFormatter implements UserFormatter
{
    public function format(string $name): string
    {
        return $name;
    }
}