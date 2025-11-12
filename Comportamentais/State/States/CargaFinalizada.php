<?php

namespace State\States;

use State\Contracts\CargaState;
use State\Carga;

class CargaFinalizada implements CargaState
{
    public function integrar(Carga $carga): void
    {
        throw new \DomainException('Carga já foi finalizada');
    }

    public function emConferencia(Carga $carga): void
    {
        throw new \DomainException('Carga já foi finalizada');
    }

    public function conferir(Carga $carga): void
    {
        throw new \DomainException('Carga já foi finalizada');
    }

    public function finalizar(Carga $carga): void
    {
        throw new \DomainException('Carga já foi finalizada');
    }

    public function mensagemFinalizada(): void
    {
        echo 'Carga finalizada com sucesso!';
    }
}