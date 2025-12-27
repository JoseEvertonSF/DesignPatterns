<?php

namespace Builder;

class Query
{
    public string $tabela;
    public string $colunas = '*';
    public string $clausulaWhere = '';
    public string $orderBy = '';
    public string $limit = '';
}
