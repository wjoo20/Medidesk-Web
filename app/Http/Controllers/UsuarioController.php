<?php

namespace App\Http\Controllers;

use App\Models\Admision;

use App\Models\Empresa;
use App\Models\Enfermera;
use App\Models\Medico;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

 

    public function showMedicos(){

      
        $medi = Medico::all();


        return view('auth.Medicos')->with('medi', $medi);
      
    

}

public function showEnfermeros(){

    $enf = Enfermera::all();


    return view('auth.Enfermeros')->with('enf', $enf);
  

    }
    
    public function showAdministradores(){

        $adm = Admision::all();


    return view('auth.Administradores')->with('adm', $adm);
  
        }

        public function showEmpresas(){

            $emp = Empresa::all();


    return view('auth.Empresas')->with('emp', $emp);
  
            
            }
            public function showInicio(){
              $tipo=Auth::user()->tipo;
              
              if ($tipo=="admision") {
                    return redirect('/inicio');   
              
                }
                elseif($tipo=="enfermera"){
                  return redirect('/inicio');   
              
                 
                }else{

                  return "gg";
                }
                

        
                }
                public function actualizarUsuario(Request $request){

                    $user_id = $request->get('id');
    
                    $user= User::where('id',$user_id)->get();
                     $tipo=$user[0]['tipo'];
             
                     if ($tipo=="medico") {
                       
                     $med = Medico::where('dni',$user_id)->get();
                     return view('auth.Medicos')->with('med',$med)->with('user',$user);
             
                     }
                   elseif($tipo=="admision"){
             
                     $med = Admision::where('dni',$user_id)->get();
                     return view('auth.Administradores')->with('med',$med)->with('user',$user);
             
                   }
                   elseif($tipo=="enfermera"){
             
                     $med = Enfermera::where('dni',$user_id)->get();
                     return view('auth.Enfermeros')->with('med',$med)->with('user',$user);
             
                   }
                   else{
                     $med = Empresa::where('ruc',$user_id)->get();
              
                              return view('auth.Empresas')->with('med',$med)->with('user',$user);
             

                    }
         

                    }  


     public function postactualizarUsuario(Request $request)
    {
      
        $id = $request->get('dni1');
        $user1 = User::where('id',$id)->get();
        $album2 = User::where('id',$id)->first();

        $tipo=$user1[0]['tipo'];

        if ($tipo=="medico") {
           $usuario = Medico::where('dni',$id)->first();
          
            $usuario->nombres=$request->get('nombres');
            $usuario->apellidos=$request->get('apellidos');
            $usuario->fecha_nacimiento=$request->get('fec_nac');
            $usuario->edad=$request->get('edad');
            $usuario->genero=$request->get('gridRadios');
            $usuario->telefono=$request->get('telefono');
            $usuario->direccion=$request->get('direccion');
            $usuario->especialidad=$request->get('Especialidad');
            $usuario->cmp=$request->get('ColegioMedico');
            $usuario->save();


            if ($request->has('password')){
                $album2->password= bcrypt($request->get('password'));
                $album2->save();
           }
           return redirect('/medicos');
           
              
            }
       
              elseif($tipo=="admision"){
                $usuario = Admision::where('dni',$id)->first();
                
                $usuario->nombres=$request->get('nombres');
                $usuario->apellidos=$request->get('apellidos');
                $usuario->fecha_nacimiento=$request->get('fec_nac');
                $usuario->edad=$request->get('edad');
                $usuario->genero=$request->get('gridRadios');
                $usuario->telefono=$request->get('telefono');
                $usuario->direccion=$request->get('direccion');
              
                $usuario->save();
              
                if ($request->has('password')){
                  $album2->password= bcrypt($request->get('password'));
                  $album2->save();}
             
             return redirect('/administradores');
      
      
              } 
        elseif($tipo=="enfermera"){
          $usuario = Enfermera::where('dni',$id)->first();
          
          $usuario->nombres=$request->get('nombres');
          $usuario->apellidos=$request->get('apellidos');
          $usuario->fecha_nacimiento=$request->get('fec_nac');
          $usuario->edad=$request->get('edad');
          $usuario->genero=$request->get('gridRadios');
          $usuario->telefono=$request->get('telefono');
          $usuario->direccion=$request->get('direccion');
          $usuario->cep=$request->get('ColegioEnfermero');

          $usuario->save();
        
          if ($request->has('password')){
            $album2->password= bcrypt($request->get('password'));
            $album2->save();}
       
       return redirect('/enfermeros');
  } 
  else{
    $usuario = Empresa::where('ruc',$id)->first();
    
    $usuario->nombre=$request->get('name');
    $usuario->direccion=$request->get('direccion');

    $usuario->save();
  
    if ($request->has('password')){
      $album2->password= bcrypt($request->get('password'));
      $album2->save();}
 
 return redirect('/empresas');
}}

public function eliminarUsuario(Request $request){

  $id = $request->get('id');


  $album1 = User::where('id',$id)->get();
  $album2 = User::where('id',$id);


  $tipo=$album1[0]['tipo'];

  if ($tipo=="medico") {


  $album = Medico::where('dni',$id);


  $album->delete();
  $album2->delete();
  return redirect('/medicos');
  }
  elseif($tipo=="enfermera"){

    $album = Enfermera::where('dni',$id);


    $album->delete();
    $album2->delete();
    return redirect('/enfermeros');


  }
  elseif($tipo=="admision"){
    $album = Admision::where('dni',$id);


    $album->delete();
    $album2->delete();
    return redirect('/administradores');

}
else{
  $album = Empresa::where('ruc',$id);


    $album->delete();
    $album2->delete();
    return redirect('/empresas');

}


}
  public function verTurnos(){

    return view('Turnos.turnos');

  }


}