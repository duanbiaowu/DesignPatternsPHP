<?php


namespace DesignPatterns\Behavioral\Visitor\Examples;


class RecordingVisitor implements RoleVisitor
{
    /**
     * @var Role[]
     */
    private array $visited = [];

    public function visitUser(User $role)
    {
        $this->visited[] = $role;
    }

    public function visitGroup(Group $role)
    {
        $this->visited[] = $role;
    }

    /**
     * @return Role[]
     */
    public function getVisited(): array
    {
        return $this->visited;
    }
}