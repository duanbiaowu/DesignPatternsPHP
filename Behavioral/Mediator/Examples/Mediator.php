<?php


namespace DesignPatterns\Behavioral\Mediator\Examples;


interface Mediator
{
    public function getBuyerName(): string;

    public function getSellerName(): string;
}