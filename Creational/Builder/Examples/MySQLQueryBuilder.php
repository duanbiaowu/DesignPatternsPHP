<?php


namespace DesignPatterns\Creational\Builder\Examples;


class MySQLQueryBuilder implements QueryBuilder
{
    protected $query;

    protected function reset()
    {
        $this->query = new \stdClass();
    }

    public function select(string $table, array $fields): QueryBuilder
    {
        $this->reset();

        $this->query->base = 'SELECT ' . implode(', ', $fields) . ' FROM ' . $table;
        $this->query->type = 'select';

        return $this;
    }

    public function where(string $filed, string $value, string $operator): QueryBuilder
    {
        if (!in_array($this->query->type, ['select', 'update', 'delete'])) {
            throw new \Exception('WHERE can only be added to SELECT, UPDATE OR DELETE');
        }
        $this->query->where[] = $filed . ' ' .  $operator . " '" . $value . "'";

        return $this;
    }

    public function limit(int $start, int $offset): QueryBuilder
    {
        if (!in_array($this->query->type, ['select'])) {
            throw new \Exception('LIMIT can only be added to SELECT');
        }

        $this->query->limit = ' LIMIT ' . $start . ', ' . $offset;

        return $this;
    }

    public function getSQL(): string
    {
        $query = $this->query;
        $sql = $query->base;

        if ($query->where) {
            $sql .= ' WHERE ' . implode(' AND ', $query->where);
        }
        if ($query->limit) {
            $sql .= $query->limit;
        }
        $sql .= ';';

        return $sql;
    }
}