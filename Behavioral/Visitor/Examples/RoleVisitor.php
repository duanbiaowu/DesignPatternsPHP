<?php


namespace DesignPatterns\Behavioral\Visitor\Examples;


interface RoleVisitor
{
    public function visitUser(User $role);

    public function visitGroup(Group $role);
}