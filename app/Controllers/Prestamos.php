<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Prestamo;
use App\Models\VwPrestamo;
use App\Models\VwDatosPrestamo;

class Prestamos extends Controller{
    public function listarPrestamos(){
        
        $prestamo= new Prestamo();
        //recibir el resultado del select en un array
        $datos['prestamos']=$prestamo->orderBy('numero_prestamo','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        
        return view('prestamos/lista_prestamos',$datos);
    }
    public function listarPrestamos2(){
        $vwPrestamo = new VwPrestamo();
        $datos['prestamos']=$vwPrestamo->orderBy('numero_prestamo','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        
        return view('prestamos/lista_prestamos',$datos);

    }
    public function listarDatosPrestamos(){
        $datosPrestamos = new VwDatosPrestamo();
        $datos['datosPrestamos']=$datosPrestamos->orderBy('numero_prestamo','ASC')->findAll();
        return view('prestamos/lista_prestamos2',$datos);
    }
}