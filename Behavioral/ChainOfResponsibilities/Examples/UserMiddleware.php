<?php


namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Examples;


class UserMiddleware extends Middleware
{
    private array $users = [
        [
            'email' => 'codean.net@gmail.com',
            'password' => '123456',
        ],
        [
            'email' => 'duanbiaowu@163.com',
            'password' => '123456',
        ],
        [
            'email' => 'duanbiaowu@black.com',
            'password' => '123456',
        ],
    ];

    public function handle(string $email, string $password): bool
    {
        foreach ($this->users as $user) {
            if ($email === $user['email'] && $password === $user['password']) {
                return parent::handle($email, $password);
            }
        }

        echo 'Invalid email or password' . PHP_EOL;

        return false;
    }
}