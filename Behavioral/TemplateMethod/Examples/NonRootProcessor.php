<?php


namespace DesignPatterns\Behavioral\TemplateMethod\Examples;


class NonRootProcessor extends RBACProcessor
{
    protected function getUserRoles(): array
    {
        return [
            'product manager',
            'project manager',
        ];
    }

    protected function getUserIdentifier(): string
    {
        return 'nonRoot';
    }
}