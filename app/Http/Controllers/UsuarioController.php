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
            public function showAdmInicio(){

                return view('auth.Inicio');
                
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
      
        $album_id = $request->get('dni1');
        $album = User::where('id',$album_id)->get();
        $album2 = User::where('id',$album_id)->first();

        $tipo=$album[0]['tipo'];

        if ($tipo=="medico") {
           $album1 = Medico::where('dni',$album_id)->first();
          
            $album1->nombres=$request->get('nombres');
            $album1->apellidos=$request->get('apellidos');
            $album1->fecha_nacimiento=$request->get('fec_nac');
            $album1->edad=$request->get('edad');
            $album1->genero=$request->get('gridRadios');
            $album1->telefono=$request->get('telefono');
            $album1->direccion=$request->get('direccion');
            $album1->especialidad=$request->get('Especialidad');
            $album1->cmp=$request->get('ColegioMedico');
            $album1->save();


            if ($request->has('password')){
                $album2->password= bcrypt($request->get('password'));
                $album2->save();
           }
           return redirect('/medicos');
           
              
            }
       
              elseif($tipo=="admision"){
                $album1 = Admision::where('dni',$album_id)->first();
                
                $album1->nombres=$request->get('nombres');
                $album1->apellidos=$request->get('apellidos');
                $album1->fecha_nacimiento=$request->get('fec_nac');
                $album1->edad=$request->get('edad');
                $album1->genero=$request->get('gridRadios');
                $album1->telefono=$request->get('telefono');
                $album1->direccion=$request->get('direccion');
              
                $album1->save();
              
                if ($request->has('password')){
                  $album2->password= bcrypt($request->get('password'));
                  $album2->save();}
             
             return redirect('/administradores');
      
      
              } 
        elseif($tipo=="enfermera"){
          $album1 = Enfermera::where('dni',$album_id)->first();
          
          $album1->nombres=$request->get('nombres');
          $album1->apellidos=$request->get('apellidos');
          $album1->fecha_nacimiento=$request->get('fec_nac');
          $album1->edad=$request->get('edad');
          $album1->genero=$request->get('gridRadios');
          $album1->telefono=$request->get('telefono');
          $album1->direccion=$request->get('direccion');
          $album1->cep=$request->get('ColegioEnfermero');

          $album1->save();
        
          if ($request->has('password')){
            $album2->password= bcrypt($request->get('password'));
            $album2->save();}
       
       return redirect('/enfermeras');
  } 
  else{
    $album1 = Empresa::where('ruc',$album_id)->first();
    
    $album1->nombre=$request->get('name');
    $album1->direccion=$request->get('direccion');

    $album1->save();
  
    if ($request->has('password')){
      $album2->password= bcrypt($request->get('password'));
      $album2->save();}
 
 return redirect('/empresas');
}}}