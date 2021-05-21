<?php


namespace DesignPatterns\Behavioral\State\Examples;


class OrderStateShipped implements OrderState
{
    public function proceedToNext(OrderContext $context): void
    {
        $context->setState(new OrderStateConfirmed());
    }

    public function __toString(): string
    {
        return 'shipped';
    }
}