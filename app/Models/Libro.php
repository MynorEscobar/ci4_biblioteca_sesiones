<?php 
namespace App\Models;

use CodeIgniter\Model;

class Libro extends Model{
    protected $table      = 'libros';
    // establecer la llave primaria (campo de la tabla)
    protected $primaryKey = 'codigo_libro';
    //colocar el nombre de los campos de la tabla, deberan completarlo
    protected $allowedFields =['codigo_libro','codigo_autor','codigo_editorial'];
}