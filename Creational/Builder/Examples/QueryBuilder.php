<?php


namespace DesignPatterns\Creational\Builder\Examples;


interface QueryBuilder
{
    public function select(string $table, array $fields): QueryBuilder;

    public function where(string $filed, string $value, string $operator): QueryBuilder;

    public function limit(int $start, int $offset): QueryBuilder;

    public function getSQL(): string;
}