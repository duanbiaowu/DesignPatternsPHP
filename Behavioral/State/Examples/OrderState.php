<?php


namespace DesignPatterns\Behavioral\State\Examples;


interface OrderState
{
    public function proceedToNext(OrderContext $context): void;

    public function __toString(): string;
}