<?php

namespace State\States;

use State\States\CargaConferida;
use State\Contracts\CargaState;
use State\Carga;

class CargaEmConferencia implements CargaState
{
    public function integrar(Carga $carga): void
    {
        throw new \DomainException('Carga já foi integrada e está em conferência');
    }

    public function emConferencia(Carga $carga): void
    {
        throw new \DomainException('Carga já está em conferência');
    }

    public function conferir(Carga $carga): void
    {
        if (count($carga->pedidosConferidos) < count($carga->pedidos)) {
            throw new \DomainException('Carga não foi totalmente conferida');
        }

        $carga->setStatus(new CargaConferida());
    }

    public function finalizar(Carga $carga): void
    {
        throw new \DomainException('Carga não pode ser finalizada sem passar pelo processo de conferência');
    }
}