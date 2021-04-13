<?php


namespace DesignPatterns\Creational\StaticFactory\Examples;


interface Formatter
{
    public function toString(array $input): string;
}