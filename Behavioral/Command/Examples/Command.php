<?php


namespace DesignPatterns\Behavioral\Command\Examples;


interface Command
{
    public function execute();

    public function undo();
}