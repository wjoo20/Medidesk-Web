<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRegistrarUsuario;
use App\Models\Admision;
use App\Models\Empresa;
use App\Models\Enfermera;
use App\Models\Medico;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

   

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if($data['Tipo']=="medico"){
            
            Medico::create([
                'dni'=>$data['Dni'],
                'nombres'=>$data['nombres'],
                'apellidos'=>$data['apellidos'],
                'fecha_nacimiento'=>$data['fec_nac'],
                'edad'=>$data['edad'],  
                'genero'=>$data['gridRadios'],
                'telefono'=>$data['telefono'],
                'direccion'=>$data['direccion'],               
                'especialidad'=>$data['Especialidad'],
                'cmp'=>$data['ColegioMedico'],
        
            ]);

            return User::create([
                'id'=>$data['Dni'],
                'tipo'=>$data['Tipo'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
              
                 ]);

        }

        if($data['Tipo']=="empresa"){
             Empresa::create([
                        'ruc'=>$data['ruc'],
                        'nombre'=>$data['name'],
                        'direccion'=>$data['direccion'],
                        
                       
        
                        ]);
            
            
            return User::create([
              
                'id'=>$data['ruc'],
                'tipo'=>$data['Tipo'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);   

        }



        if($data['Tipo']=="admision"){
           
            Admision::create([
                 'dni'=>$data['Dni'],   
                'nombres'=>$data['nombres'],
                'apellidos'=>$data['apellidos'],
                'fecha_nacimiento'=>$data['fec_nac'],
                'edad'=>$data['edad'],  
                'genero'=>$data['gridRadios'],
                'telefono'=>$data['telefono'],
                'direccion'=>$data['direccion'],
                
               

                ]);

            return User::create([
                        'id'=>$data['Dni'],
                        'tipo'=>$data['Tipo'],
                        'email' => $data['email'],
                        
                        'password' => Hash::make($data['password']),
                    ]);

        }

        if($data['Tipo']=="enfermera"){
           
            Enfermera::create([
                'dni'=>$data['Dni'],  
                'nombres'=>$data['nombres'],
                'apellidos'=>$data['apellidos'],
                'fecha_nacimiento'=>$data['fec_nac'],
                'edad'=>$data['edad'],  
                'genero'=>$data['gridRadios'],
                'telefono'=>$data['telefono'],
                'direccion'=>$data['direccion'],
                'cep'=>$data['ColegioEnfermero'],
            

                ]);

            return User::create([
                        'id'=>$data['Dni'],
                        'tipo'=>$data['Tipo'],
                        'email' => $data['email'],
                        'password' => Hash::make($data['password']),
                    ]);

        }


    }

    public function getRegistrar(){

        return view('auth.registrarUsuario');


    }


        public function postRegistrar(RequestRegistrarUsuario $request)
        {
            $data = $request->all();
            
            
            $this->create($data);

            if($data['Tipo']=="enfermera"){

            return redirect('/enfermeros');



            }
            if($data['Tipo']=="admision"){

                return redirect('/administradores');


    
    
                } if($data['Tipo']=="medico"){

                    return redirect('/medicos');


        
                    } if($data['Tipo']=="empresa"){

                        return redirect('/empresas');


            
                        }
                 
        }


}
