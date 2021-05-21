<?php


namespace DesignPatterns\Behavioral\State\Examples;


class OrderStateDone implements OrderState
{
    public function proceedToNext(OrderContext $context): void
    {
        // there is nothing more to do
    }

    public function __toString(): string
    {
        return 'done';
    }
}