<?php 

namespace State\Contracts;
use State\Carga;

interface CargaState { 
    public function integrar(Carga $carga) : void; 
    public function emConferencia(Carga $carga) : void; 
    public function conferir(Carga $carga) : void; 
    public function finalizar(Carga $carga) : void; 
} 

