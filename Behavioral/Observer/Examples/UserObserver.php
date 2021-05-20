<?php


namespace DesignPatterns\Behavioral\Observer\Examples;


use SplSubject;

class UserObserver implements \SplObserver
{
    private array $blogs = [];

    public function update(SplSubject $subject)
    {
        $this->blogs[] = clone $subject;
    }

    public function getSubscribedBlogs(): array
    {
        return $this->blogs;
    }
}