<?php

namespace App\Models;

use CodeIgniter\Model;

class Producto_model extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';

    protected $allowedFields = ['descripcion_prod', 'imagen', 'cod_categoria', 'precio', 'precio_venta', 'stock', 'stock_min', 'eliminado'];

    /*function get_ventas_cabecera() {
        /**
         * El método $this->db->from() se utiliza para especificar la tabla principal (ventas_cabecera) desde la cual se recuperan los datos.

        *El método $this->db->join() se utiliza para realizar una unión interna entre las tablas ventas_cabecera y usuarios. Une las dos tablas en función de la columna usuario_id de ventas_cabecera y la columna id_usuarios de usuarios.

        *La línea $query = $this->db->get() ejecuta la consulta de base de datos construida y asigna el resultado a la variable $query.

        *El código verifica si la consulta se realizó correctamente utilizando if($query->()). 
         */
        /*$this->db->select('ventas_cabecera.*, usuarios.nombre');
        $this->db->from('ventas_cabecera');
        $this->db->join('usuarios', 'ventas_cabecera.usuario_id = usuarios.id_usuarios');

        $query = $this->db->get();

        if($query->num_rows() > 0) {

        } else {
            return FALSE;
        }
    }*/
    public function sacar_del_stock($id, $cantidad_que_saco) {
        $producto = new Producto_model();

        //$producto->find($id)['stock'] - $cantidad_que_saco;
        $aux = $producto->where('id_producto', $id)->first();
        $nuevo_stock = $aux['stock'] - $cantidad_que_saco;
        $data = [

            'stock' => $nuevo_stock,
            
        ];

        $producto->update($id, $data);
        
    }
}
