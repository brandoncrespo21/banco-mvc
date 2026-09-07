<?php

require_once __DIR__ . '/../models/Cuenta.php';

class CuentaController
{
    public function mostrarCuenta()
    {
        $modelo = new Cuenta();
        $cuenta = $modelo->obtenerDatos();
        require __DIR__ . '/../views/cuenta.php';
    }
}
