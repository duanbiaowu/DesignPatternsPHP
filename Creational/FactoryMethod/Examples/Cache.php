<?php


namespace DesignPatterns\Creational\FactoryMethod\Examples;


interface Cache
{
    public function get(string $key);

    public function set(string $key, $value);
}