<?php


namespace DesignPatterns\Creational\Builder\Examples;


class SQLQueryBuilder
{
    /**
     * The real world example:
     * DB::connection()
     *      ->queryBuilder(new MysqlQueryBuilder())
     *      ->where(['name' => 'php'])
     *      ->group()
     *      ->orderBy()
     *      ->limit()
     *      ->getSQL()
     *
     * @param QueryBuilder $queryBuilder
     * @return string
     */
    public function build(QueryBuilder $queryBuilder): string
    {
        return $queryBuilder
            ->select('users', ['name', 'email', 'password'])
            ->where('age', 18, '>')
            ->where("age", 30, '<')
            ->limit(10, 20)
            ->getSQL();
    }
}