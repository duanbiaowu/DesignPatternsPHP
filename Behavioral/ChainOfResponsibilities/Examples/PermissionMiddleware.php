<?php


namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Examples;


class PermissionMiddleware extends Middleware
{
    private array $users = [
        [
            'email' => 'codean.net@gmail.com',
        ],
    ];

    public function handle(string $email, string $password): bool
    {
        foreach ($this->users as $user) {
            if ($email === $user['email']) {
                return parent::handle($email, $password);
            }
        }

        echo 'The request was forbidden' . PHP_EOL;
        return false;
    }
}