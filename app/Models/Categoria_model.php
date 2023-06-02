<?php
namespace App\Models;
use CodeIgniter\Model;

class Categoria_model extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id_categoria';
    protected $allowedFields = ['nombre_categoria', 'categoria_eliminada'];
}