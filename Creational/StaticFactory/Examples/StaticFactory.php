<?php


namespace DesignPatterns\Creational\StaticFactory\Examples;



final class StaticFactory
{
    public static function factory(string $type): Formatter
    {
        if ($type == 'json') {
            return new JsonFormatter();
        } else if ($type == 'xml') {
            return new XmlFormatter();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}