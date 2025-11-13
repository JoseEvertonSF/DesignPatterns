<?php

namespace Command\Contracts;

interface EletroDomesticoInterface{
    public function ligar();
    public function desligar();
    public function aumentar();
    public function diminuir();
}