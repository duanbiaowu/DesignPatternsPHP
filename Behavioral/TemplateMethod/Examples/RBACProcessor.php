<?php


namespace DesignPatterns\Behavioral\TemplateMethod\Examples;


abstract class RBACProcessor
{
    /**
     * @var string[]
     */
    private array $processList = [];

    final public function hasPermission(): bool
    {
        $this->processList[] = $this->checkLoginState();
        $identifier = $this->getUserIdentifier();
        $this->processList[] = $identifier;

        $this->processList[] = $this->log();

        if ($identifier === 'root') {
            return true;
        } else {
            $roles = $this->getUserRoles();
            $this->processList[] = $roles;

            foreach ($roles as $role) {
                if ($role === 'vp') {
                    return true;
                }
            }
        }

        return false;
    }

    abstract protected function getUserIdentifier(): string;

    abstract protected function getUserRoles(): array;

    protected function checkLoginState(): string
    {
        return 'Checking state token...';
    }

    protected function log(): string
    {
        return 'Logging...';
    }

    /**
     * @return string[]
     */
    public function getProcessList(): array
    {
        return $this->processList;
    }
}