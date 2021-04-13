<?php


namespace DesignPatterns\Creational\StaticFactory\Examples;


class XmlFormatter implements Formatter
{
    public function toString(array $input): string
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0"?><formatter></formatter>');
        array_walk_recursive($input, [$xml, 'addChild']);

        return $xml->asXML();
    }
}