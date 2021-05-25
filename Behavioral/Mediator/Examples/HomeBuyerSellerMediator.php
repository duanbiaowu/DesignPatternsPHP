<?php


namespace DesignPatterns\Behavioral\Mediator\Examples;


class HomeBuyerSellerMediator implements Mediator
{
    private Buyer $buyer;

    private Seller $seller;

    /**
     * HomeBuyerSellerMediator constructor.
     * @param Buyer $buyer
     * @param Seller $seller
     */
    public function __construct(Buyer $buyer, Seller $seller)
    {
        $this->buyer = $buyer;
        $this->seller = $seller;

        $this->buyer->setMediator($this);
        $this->seller->setMediator($this);
    }

    public function getBuyerName(): string
    {
        return $this->buyer->getUserName();
    }

    public function getSellerName(): string
    {
        return $this->seller->getUserName();
    }
}