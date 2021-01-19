<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests\ActualizarRequest;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::paginate(100);

        return view('auth.Paciente', ['pacientes'=>$pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.AgregarPaciente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre'=>'required',
            'apellido'=>'required',
            'edad'=>'required',
            'dni'=>'required',
            'f_nacimiento'=>'required',
            'genero'=>'required'
        ]);

        $paciente = new Paciente();
        $paciente->nombres = $request->nombre;
        $paciente->apellidos = $request->apellido;
        $paciente->edad = $request->edad;
        $paciente->_id = $request->dni;
        $paciente->fecha_nacimiento = $request->f_nacimiento;
        $paciente->genero = $request->genero;

        $paciente->save();

        return redirect('/paciente')->with('correcto', 'Paciente creado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        return view('auth.ModificarPaciente', ['paciente'=>$paciente, 'paciente'=>Paciente::pluck('_id')]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
