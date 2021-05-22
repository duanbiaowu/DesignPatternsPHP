<?php


namespace DesignPatterns\Behavioral\TemplateMethod\Examples;


class RootProcessor extends RBACProcessor
{
    protected function getUserRoles(): array
    {
        return [];
    }

    protected function getUserIdentifier(): string
    {
        return 'root';
    }
}