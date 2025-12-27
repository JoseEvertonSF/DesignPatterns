<?php

namespace Builder;

use Builder\Contracts\QueryBuilderInterface;

class QueryBuilder implements QueryBuilderInterface
{
    private string $tabela;
    private Query $query;

    public function __construct(string $tabela)
    {
        $this->query = new Query();
        $this->query->tabela = $tabela;
    }

    public function select(array $colunas = []): QueryBuilder
    {
        if ($colunas !== []) {
            $this->query->colunas = implode(',', $colunas);
        }

        return $this;
    }

    public function where(array $colunasValores): QueryBuilder
    {
        $where = 'WHERE ';
        $contagem = count($colunasValores);
        $controleAnd = 1;

        foreach ($colunasValores as $coluna => $valor) {
            $where .= $coluna . ' = ' . $valor;

            if ($controleAnd < $contagem) {
                $where .= ' AND ';
            }

            $controleAnd++;
        }

        $this->query->where = $where;

        return $this;
    }

    public function orderBy(array $colunas): QueryBuilder
    {
        $this->query->orderBy = 'ORDER BY ' . implode(',', $colunas);

        return $this;
    }

    public function limit(int $valorLimit): QueryBuilder
    {
        $this->query->limit = 'LIMIT ' . $valorLimit;

        return $this;
    }

    public function get()
    {
        $sql = 'SELECT ' . $this->query->colunas . ' FROM ' . $this->query->tabela;

        if ($this->query->where !== '') {
            $sql .= ' ' . $this->query->where;
        }

        if ($this->query->orderBy !== '') {
            $sql .= ' ' . $this->query->orderBy;
        }

        if ($this->query->limit !== '') {
            $sql .= ' ' . $this->query->limit;
        }

        return $sql;
    }
}