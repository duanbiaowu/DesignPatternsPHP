<?php


namespace DesignPatterns\Structural\Decorator\Examples;


class FullReduction extends OrderDecorator
{
    private const LIMIT = 300.00;

    private const PRICE = 30.00;

    public function calculatePrice(): float
    {
        $price = $this->order->calculatePrice();
        if ($price >= self::LIMIT) {
            $price -= self::PRICE;
        }

        return $price;
    }
}