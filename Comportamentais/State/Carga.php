<?php

namespace State;

use State\States\CargaIntegrada;

class Carga { 
    private $statusCarga; 
    public $pedidos = [1, 2, 3]; 
    public $pedidosConferidos = []; 
    public $nfs = []; 

    function __construct() { 
        $this->statusCarga = new CargaIntegrada(); 
    } 
    
    public function integrar() : void 
    { 
        $this->statusCarga->integrar($this); 
    }
    
    public function emConferencia(int $numeroPedido) : void 
    {
        $this->pedidosConferidos[] = $numeroPedido; 
        if(count($this->pedidosConferidos) == 1){ 
            $this->statusCarga->emConferencia($this); 
        } 
    } 
    
    public function conferir() : void 
    { 
        $this->statusCarga->conferir($this); 
    } 
    
    public function finalizar($nf) : void 
    { 
        $this->nfs[] = $nf; 
        if(count($this->nfs) == count($this->pedidosConferidos))
        {
            $this->statusCarga->finalizar($this); 
        } 
    }

    public function setStatus($statusCarga) 
    { 
        $this->statusCarga = $statusCarga; 
    }
}