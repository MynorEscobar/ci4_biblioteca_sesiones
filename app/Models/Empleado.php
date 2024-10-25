<?php 
namespace App\Models;

use CodeIgniter\Model;

class Empleado extends Model{
    protected $table      = 'empleados';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'codigo_empleado';
    //campos permitidos (campos a los que se tendra acceso)
    protected $allowedFields =['codigo_empleado','nombre','apellido','direccion','email'];
}