<?php


namespace DesignPatterns\Structural\Decorator\Examples;


interface Order
{
    public function calculatePrice(): float;
}