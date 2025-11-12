<?php

namespace State\States;

use State\States\CargaFinalizada;
use State\Contracts\CargaState;
use State\Carga;

class CargaConferida implements CargaState
{
    public function integrar(Carga $carga): void
    {
        throw new \DomainException('Carga já foi integrada e está em conferência');
    }

    public function emConferencia(Carga $carga): void
    {
        throw new \DomainException('Carga já esteve em conferência e está conferida');
    }

    public function conferir(Carga $carga): void
    {
        throw new \DomainException('Carga já está conferida');
    }

    public function finalizar(Carga $carga): void
    {
        if (count($carga->nfs) < count($carga->pedidosConferidos)) {
            throw new \DomainException('Carga não pode ser finalizada pois existem pedidos sem NFS');
        }

        $carga->setStatus(new CargaFinalizada());
    }
}