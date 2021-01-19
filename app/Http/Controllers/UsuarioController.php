<?php

namespace App\Http\Controllers;

use App\Models\Admision;

use App\Models\Empresa;
use App\Models\Enfermera;
use App\Models\Medico;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
                    return view('auth.Inicio');   
              
                }
                elseif($tipo=="enfermera"){
                  return redirect('dashboard/triaje');   
              
                 
                }elseif($tipo=="medico"){
                    return redirect('em/citas/{id}');
                }
              else{

                return view('auth.Inicio');   
              
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
        $id_act = User::where('id',$id)->first();

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
                $id_act->password= bcrypt($request->get('password'));
                $id_act->save();
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
                  $id_act->password= bcrypt($request->get('password'));
                  $id_act->save();}
             
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
            $id_act->password= bcrypt($request->get('password'));
            $id_act->save();}
       
       return redirect('/enfermeros');
  } 
  else{
    $usuario = Empresa::where('ruc',$id)->first();
    
    $usuario->nombre=$request->get('name');
    $usuario->direccion=$request->get('direccion');

    $usuario->save();
  
    if ($request->has('password')){
      $id_act->password= bcrypt($request->get('password'));
      $id_act->save();}
 
 return redirect('/empresas');
}}

public function eliminarUsuario(Request $request){

  $id = $request->get('id');

  $id_tipo = User::where('id',$id)->get();
  $del_user = User::where('id',$id);

  $tipo=$id_tipo[0]['tipo'];

  if ($tipo=="medico") {

    $del_tipo = Medico::where('dni',$id);

    $del_tipo->delete();
    $del_user->delete();
    return redirect('/medicos');
  }
  elseif($tipo=="enfermera"){

    $del_tipo = Enfermera::where('dni',$id);

    $del_tipo->delete();
    $del_user->delete();
    return redirect('/enfermeros');

  }
  elseif($tipo=="admision"){
    $del_tipo = Admision::where('dni',$id);

    $del_tipo->delete();
    $del_user->delete();
    return redirect('/administradores');

}
else{
  $del_tipo = Empresa::where('ruc',$id);

    $del_tipo->delete();
    $del_user->delete();
    return redirect('/empresas');

}


}
  public function verTurnos(){

    $idEsp1 = "1";
    $idEsp2 = "2";
    $idEsp3 = "3";
    $idEsp4 = "4";
    $idEsp5 = "5";
    $idEsp6 = "6";
    $idEsp7 = "7";
    $cit1 = Http::get('http://localhost:5000/turns/'.$idEsp1);
    $cit2 = Http::get('http://localhost:5000/turns/'.$idEsp2);
    $cit3 = Http::get('http://localhost:5000/turns/'.$idEsp3);
    $cit4 = Http::get('http://localhost:5000/turns/'.$idEsp4);
    $cit5 = Http::get('http://localhost:5000/turns/'.$idEsp5);
    $cit6 = Http::get('http://localhost:5000/turns/'.$idEsp6);
    $cit7 = Http::get('http://localhost:5000/turns/'.$idEsp7);
    
    
    $turno1 = $cit1->json();
    $turno2 = $cit2->json();
    $turno3 = $cit3->json();
    $turno4 = $cit4->json();
    $turno5 = $cit5->json();
    $turno6 = $cit6->json();
    $turno7 = $cit7->json();
    $t1=$turno1[0]['cita']['dni'];
    $t2=$turno2[0]['cita']['dni'];
    $t3=$turno3[0]['cita']['dni'];
    $t4=$turno4[0]['cita']['dni'];
    $t5=$turno5[0]['cita']['dni'];
    $t6=$turno6[0]['cita']['dni'];
    $t7=$turno7[0]['cita']['dni'];
    return view('Turnos.turnos')->with('t1',$t1)->with('t2',$t2)->with('t3',$t3)->with('t4',$t4)->with('t5',$t5)->with('t6',$t6)->with('t7',$t7);

  } 


}