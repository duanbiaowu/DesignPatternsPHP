<?php

namespace DesignPatterns\Behavioral\Observer\Examples\Tests;

use DesignPatterns\Behavioral\Observer\Examples\BlogSubject;
use DesignPatterns\Behavioral\Observer\Examples\UserObserver;
use PHPUnit\Framework\TestCase;

class BlogUserObserverTest extends TestCase
{
    public function testPublishBlogLeadsToUserUpdated()
    {
        $observer = new UserObserver();
        $this->assertCount(0, $observer->getSubscribedBlogs());

        $blog = new BlogSubject('hello world', str_repeat('hello world', 1024));
        $blog->attach($observer);

        $blog->publish();
        $this->assertCount(1, $observer->getSubscribedBlogs());
    }
}
