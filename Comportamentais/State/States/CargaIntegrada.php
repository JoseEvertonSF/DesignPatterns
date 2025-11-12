<?php

namespace State\States;

use State\States\CargaEmConferencia;
use State\Contracts\CargaState;
use State\Carga;

class CargaIntegrada implements CargaState { 

    public function integrar(Carga $carga) : void 
    { 
        throw new \DomainException('Carga já está integrada'); 
    } 
    
    public function emConferencia(Carga $carga) : void 
    { 
        if(count($carga->pedidosConferidos) == 0){ 
            throw new \DomainException('Carga precisa de apenas um pedido conferido para mudar de status para: EM CONFERENCIA'); 
        } 
        
        $carga->setStatus(new CargaEmConferencia()); 
    } 
    
    public function conferir(Carga $carga) : void 
    { 
        throw new \DomainException('Carga não passou pelo processo de conferência'); 
    } 
    
    public function finalizar(Carga $carga) : void 
    { 
        throw new \DomainException('Carga não pode ser finalizada passou pelo processo de conferência'); 
    } 
}