<?php


namespace DesignPatterns\Behavioral\State\Examples;



class OrderStateCreated implements OrderState
{
    public function proceedToNext(OrderContext $context): void
    {
        $context->setState(new OrderStateShipped());
    }

    public function __toString(): string
    {
        return 'created';
    }
}