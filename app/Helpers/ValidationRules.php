<?php
// app/Helpers/ValidationRules.php
namespace App\Helpers;

use CodeIgniter\Validation\Rules;

class ValidationRules extends Rules
{
    public function valid_phone_number(string $str = null, string &$error = null): bool
    {
    // Implementa tu lógica de validación personalizada para el número telefónico aquí
    // Puedes utilizar expresiones regulares, funciones de validación específicas, etc.

    // Ejemplo de validación básica: solo permite dígitos y guiones
    if (!preg_match('/^[0-9\-]+$/', $str)) {
        $error = 'El número telefónico solo puede contener dígitos y guiones.';
        return false;
    }       
    return true;
    }
}