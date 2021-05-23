<?php

namespace DesignPatterns\Structural\Proxy\Examples\Tests;

use DesignPatterns\Structural\Proxy\Examples\CacheIdentifier;
use DesignPatterns\Structural\Proxy\Examples\DataBaseIdentifier;
use PHPUnit\Framework\TestCase;

class IdentifierProxyTest extends TestCase
{
    public function testCacheWillGetIdentifier()
    {
        $expected = [
            'username' => 'dev',
            'email' => 'codean.net@gmail.com',
            'password' => '123456',
        ];

        $cacheIdentifier = new CacheIdentifier(new DataBaseIdentifier());
        $this->assertSame($expected, $cacheIdentifier->getUserByToken('qwerty'));
    }

    public function testCacheWillGetRemovedIdentifier()
    {
        $expected = [
            'username' => 'dev',
            'email' => 'codean.net@gmail.com',
            'password' => '123456',
        ];

        $databaseIdentifier = new DataBaseIdentifier();
        $cacheIdentifier = new CacheIdentifier($databaseIdentifier);
        $this->assertSame($expected, $cacheIdentifier->getUserByToken('qwerty'));

        $databaseIdentifier->removeUserByToken('qwerty');
        $this->assertSame($expected, $cacheIdentifier->getUserByToken('qwerty'));
    }
}
