<?php


namespace DesignPatterns\Structural\Bridge\Examples;


interface UserFormatter
{
    public function format(string $name): string;
}