<?php

namespace DesignPatterns\Creational\Builder\Examples\Tests;

use DesignPatterns\Creational\Builder\Examples\MySQLQueryBuilder;
use DesignPatterns\Creational\Builder\Examples\PostgresQueryBuilder;
use DesignPatterns\Creational\Builder\Examples\SQLQueryBuilder;
use PHPUnit\Framework\TestCase;

class SQLQueryBuilderTest extends TestCase
{
    public function testMySQLQueryBuild()
    {
        $sql = (new SQLQueryBuilder())->build(new MySQLQueryBuilder());
        $expected = "SELECT name, email, password FROM users WHERE age > '18' AND age < '30' LIMIT 10, 20;";

        $this->assertSame($expected, $sql);
    }

    public function testPostgresQueryBuilder()
    {
        $sql = (new SQLQueryBuilder())->build(new PostgresQueryBuilder());
        $expected = "SELECT name, email, password FROM users WHERE age > '18' AND age < '30' LIMIT 10 OFFSET 20;";

        $this->assertSame($expected, $sql);
    }
}
