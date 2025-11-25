<?php

namespace Visitor\Contracts;

use Visitor\Contracts\ImpostoVisitor;

interface DocumentoFiscal
{
    public function accept(ImpostoVisitor $imposto);
}