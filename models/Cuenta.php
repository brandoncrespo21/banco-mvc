<?php

class Cuenta
{
    private $cliente = 'Crespo Chamorro Paul Brandon';
    private $numero = '1001-7654321';
    private $saldo = 23969.00;

    public function obtenerDatos()
    {
        return [
            'cliente' => $this->cliente,
            'numero' => $this->numero,
            'saldo' => $this->saldo
        ];
    }
}
