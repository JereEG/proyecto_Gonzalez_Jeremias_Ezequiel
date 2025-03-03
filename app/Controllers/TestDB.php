<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;
use Throwable;

class TestDB extends Controller
{
   public function index()
    {
        try {
            $db = Database::connect();
            $db->query('SELECT 1'); // Fuerza una consulta real
            echo "Conexión exitosa. Versión del servidor: " . $db->getVersion();
        } catch (Throwable $e) {
           echo "Error crítico: " . $e->getMessage() . 
            "<br>Verifica: HOST=" . env('database.default.hostname');

        }
    }
    
}