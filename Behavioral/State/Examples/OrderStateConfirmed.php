<?php


namespace DesignPatterns\Behavioral\State\Examples;


class OrderStateConfirmed implements OrderState
{
    public function proceedToNext(OrderContext $context): void
    {
        $context->setState(new OrderStateDone());
    }

    public function __toString(): string
    {
        return 'confirmed';
    }
}