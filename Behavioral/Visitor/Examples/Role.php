<?php


namespace DesignPatterns\Behavioral\Visitor\Examples;


interface Role
{
    public function accept(RoleVisitor $visitor);
}