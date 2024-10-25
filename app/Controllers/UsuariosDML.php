<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;
class Usuarios extends Controller{
    public function iniciarSesion(){
        $usuario = $this->request->getVar('txtUsuario');
        $contra = $this->request->getVar('txtContra');

        //$sql="select * from usuarios where usuario='". $usuario ."' and password=md5('".$contra."')";
        $sql="select * from usuarios where usuario='". $usuario ."' and password=('".$contra."')";
        //echo $sql;
        $conexion = db_connect(); //conexion de la base de datos
        //ejecutar el codigo sql
        $ejecutar = $conexion->query($sql);
        //ver cantidad de registros, si existe 1 registro el usuario y contraseña son validos
        $cantidad = $ejecutar->getNumRows();
        //echo "Cantidad de usuario localizados: ". $cantidad;
        if($cantidad>0){
            //posicionarse en el registro localizado 
            $usuario = $ejecutar->getRow(0);
            //echo $usuario->codigo;
            //echo $usuario->usuario;
            //echo $usuario->password;
            //echo $usuario->tipo_id; //con el tipo voy a saber a que menu ingresar

            if ($usuario->tipo_id ==1){
                return view('menu_admin');
                //echo "ir al menu de administrador";
            }elseif($usuario->tipo_id==2){
                return view('menu_bibliotecario');
                //echo "ir al menu bibliotecario";
            }elseif($usuario->tipo_id==3){
                //echo "ir al menu de operador";
                return view('menu_operador');
            }else{
                //echo "regresar al inicio de sesión";
                return view('inicio_sesion');           
                
            }

        }else{
            echo "Datos incorrectos, verifique información";
            //retornar a la pagina anterio, enviando mensaje
            return redirect()->back()->with('mensaje','Datos incorrectos');
            
            //return view('inicio_sesion');
        }
    }
}