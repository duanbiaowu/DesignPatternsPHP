<?php


namespace DesignPatterns\Creational\StaticFactory\Examples;


class JsonFormatter implements Formatter
{
    public function toString(array $input): string
    {
        $string = json_encode($input);
        if (JSON_ERROR_NONE !== json_last_error()) {
            throw new \InvalidArgumentException(
                'json_encode error: ' . json_last_error_msg()
            );
        }

        return $string;
    }
}