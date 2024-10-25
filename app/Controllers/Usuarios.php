<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;
class Usuarios extends Controller{
    public function iniciarSesion(){
        $usuario = $this->request->getPost('txtUsuario');
        $contra = $this->request->getPost('txtContra');

        $usuarioModel = new Usuario();
        $resultado=$usuarioModel->where('usuario',$usuario)->where('password',$contra)->first();
        $cantidad = count($resultado);
        /*
        echo $cantidad;
        print_r ($resultado);
        */
        //echo "Cantidad de usuario localizados: ". $cantidad;
        if($cantidad>0){
            //ver datos de usuario 
            /*
            print_r($resultado['codigo']);
            print_r($resultado['usuario']);
            print_r($resultado['password']);
            print_r($resultado['tipo_id']); //con el tipo voy a saber a que menu ingresar
            */

            //asignar datos a variables de sesión
            session()->set([
                'codigo'=>$resultado['codigo'],
                'usuario'=>$resultado['usuario'],
                'tipo_usuario'=>$resultado['tipo_id']
            ]);

            if ($resultado['tipo_id'] ==1){
                return view('menu_admin');
                //echo "ir al menu de administrador";
            }elseif($resultado['tipo_id']==2){
                return view('menu_bibliotecario');
                //echo "ir al menu bibliotecario";
            }elseif($resultado['tipo_id']==3){
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
    public function cerrarSesion(){
        session()->destroy();
        return redirect()->to(base_url('/'));
    }

}