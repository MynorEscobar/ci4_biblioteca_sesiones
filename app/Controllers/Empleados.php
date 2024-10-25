<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Empleado;
use Kint\Zval\Representation\SourceRepresentation;

class Empleados extends Controller{
    
    public function cargarEmpleados(){
        //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
        $empleado = new Empleado();
        //recibir el resultado del select en un array
        $datos['misEmpleados']=$empleado->orderBy('codigo_empleado','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('empleados/lista_empleado', $datos);
    }
    public function eliminarEmpleado($codigo=null){
        //echo "Codigo: ". $codigo;
        //instanciar la clase Empleado (modelo = conexion a la tabla)
        $empleado = new Empleado();
        $empleado->delete($codigo);
       
        $datos['misEmpleados']=$empleado->orderBy('codigo_empleado','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('empleados/lista_empleado', $datos);
        
    }
    public function verFormularioNuevoEmpleado(){
        return view('empleados/form_nuevo_empleado');
    }
    public function guardarEmpleados(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $empleado = new Empleado();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtApellido = $this->request->getVar('txtApellido');
        $txtDireccion = $this->request->getVar('txtDireccion');
        $txtEmail = $this->request->getVar('txtEmail');
        //trasladar esos valores a la base de datos
        $datos=[
            'codigo_empleado'=>$txtCodigo,
            'nombre'=>$txtNombre,
            'apellido'=>$txtApellido,
            'direccion'=>$txtDireccion,
            'email'=>$txtEmail
        ];
        $empleado->insert($datos);

        //cargar la lista
        $datos['misEmpleados']=$empleado->orderBy('codigo_empleado','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('empleados/lista_empleado', $datos);
    }
    public function frmModificarEmpleado($codigo=null){
        
        $empleado = new Empleado();
        $datos['empleado']=$empleado->where('codigo_empleado',$codigo)->first();
        return view('empleados/form_modificar_empleado',$datos);
    }
    public function modificarEmpleado(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $empleado = new Empleado();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtApellido = $this->request->getVar('txtApellido');
        $txtDireccion = $this->request->getVar('txtDireccion');
        $txtEmail = $this->request->getVar('txtEmail');
        //trasladar esos valores a la base de datos
        $datos=[
            'nombre'=>$txtNombre,
            'apellido'=>$txtApellido,
            'direccion'=>$txtDireccion,
            'email'=>$txtEmail
        ];
        $empleado->update($txtCodigo,$datos);

        //cargar la lista
        $datos['misEmpleados']=$empleado->orderBy('codigo_empleado','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('empleados/lista_empleado', $datos);
    }
    
}