<?php


namespace DesignPatterns\Structural\Decorator\Examples;


class OriginalOrder implements Order
{
    public function calculatePrice(): float
    {
        return 500.00;
    }
}