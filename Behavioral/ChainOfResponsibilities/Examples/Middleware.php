<?php


namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Examples;


abstract class Middleware
{
    private ?Middleware $next = null;

    public function add(Middleware $next): Middleware
    {
        $this->next = $next;

        return $next;
    }

    public function handle(string $email, string $password): bool
    {
        if (!$this->next) {
            return true;
        }

        return $this->next->handle($email, $password);
    }
}