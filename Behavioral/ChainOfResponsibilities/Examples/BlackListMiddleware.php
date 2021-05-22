<?php


namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Examples;


class BlackListMiddleware extends Middleware
{
    private array $users = [
        [
            'email' => 'duanbiaowu@black.com',
        ],
    ];

    public function handle(string $email, string $password): bool
    {
        foreach ($this->users as $user) {
            if ($email === $user['email']) {
                echo 'The email has been disabled' . PHP_EOL;
                return false;
            }
        }

        return parent::handle($email, $password);
    }
}