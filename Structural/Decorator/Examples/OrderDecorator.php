<?php


namespace DesignPatterns\Structural\Decorator\Examples;


abstract class OrderDecorator implements Order
{
    protected Order $order;

    /**
     * OrderDecorator constructor.
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }
}