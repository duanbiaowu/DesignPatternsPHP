<?php


namespace DesignPatterns\Behavioral\State\Examples;


class OrderContext
{
    private OrderState $state;

    public static function create(): OrderContext
    {
        $order = new static();
        $order->state = new OrderStateCreated();

        return $order;
    }

    /**
     * @param OrderState $state
     */
    public function setState(OrderState $state): void
    {
        $this->state = $state;
    }

    public function proceedToNext()
    {
        $this->state->proceedToNext($this);
    }

    public function __toString(): string
    {
        return (string)$this->state;
    }
}