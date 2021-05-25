<?php


namespace DesignPatterns\Structural\Decorator\Examples;


class Discount extends OrderDecorator
{
    private const RATE = 0.2;

    public function calculatePrice(): float
    {
        return $this->order->calculatePrice() * (1 - self::RATE);
    }
}