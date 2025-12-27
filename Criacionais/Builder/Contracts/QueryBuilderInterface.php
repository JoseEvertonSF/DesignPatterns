<?php

namespace Builder\Contracts;

use Builder\QueryBuilder;

interface QueryBuilderInterface
{
    public function select(array $colunas): QueryBuilder;
    public function where(array $colunasValores): QueryBuilder;
    public function orderBy(array $colunas): QueryBuilder;
    public function limit(int $valorLimit): QueryBuilder;
    public function get();
}
