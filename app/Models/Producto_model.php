<?php

namespace App\Models;

use CodeIgniter\Model;

class Producto_model extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';

    protected $allowedFields = ['descripcion_prod', 'imagen', 'cod_categoria', 'precio', 'precio_venta', 'stock', 'stock_min', 'eliminado'];

    /*function get_ventas_cabecera() {
        $this->db->select('ventas_cabecera.*, usuarios.nombre');
        $this->db->from('ventas_cabecera');
        $this->db->join('usuarios', 'ventas_cabecera.usuario_id = usuarios.id_usuarios')

        $query = $this->db->get();

        if($query->()) {

        } else {
            return FALSE;
        }
    }*/
}
