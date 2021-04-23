<?php


namespace DesignPatterns\Creational\Builder\Examples;


class PostgresQueryBuilder extends MySQLQueryBuilder
{
    public function limit(int $start, int $offset): QueryBuilder
    {
        $this->query->limit = ' LIMIT ' . $start . ' OFFSET ' . $offset;

        return $this;
    }
}