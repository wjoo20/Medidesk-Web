<?php

namespace App\Http\Controllers;

use App\Reserva;
use Illuminate\Http\Request;
use App\Paciente;
// use App\Model\Reserva;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserva = Reserva::paginate(10);


        return view('auth.Reservas',['reserva'=> $reserva]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.RegistrarReservas',['reserva'=> new Reserva()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Reserva::create($request -> all());
        // return back()->with('status', 'Reserva creada correctamente');

        $this -> validate($request,[
            'nombres' => 'required',
            'apellidos' => 'required',
            '_id' => 'required',
            'telefono'=>'required',
            'id_empresa'=>'required',
            'fecha_nacimiento'=>'required',
            'estado' =>'required',
            'fecha_reserva'=>'required',
            'especialidad'=>'required'

        ]);

        $reserva = new Paciente();
        $reserva -> nombres=$request->nombres;
        $reserva -> apellidos=$request->apellidos;
        $reserva -> _id=$request->_id;
        $reserva -> telefono=$request->telefono;
        $reserva -> id_empresa=$request->id_empresa;
        $reserva -> fecha_nacimiento=$request->fecha_nacimiento;

        $reserva->save();

        $now = new Reserva();
        $now -> dni_paciente=$request->_id;
        $now -> fecha_reserva=$request->created_at;
        $now -> estado=$request->estado;
        $now -> fecha_reserva=$request->fecha_reserva;
        $now -> especialidad=$request->especialidad;
        $now -> save();

        return redirect('/reservas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $dni_paciente)
    {
        return view('auth.EditarReservas',['reserva'=> $dni_paciente]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Reserva $dni_paciente)
    {
        // dd("hola");
        $reserva->update($request -> all());
        return redirect('/reservas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva, $id)
    {
        $reserva= Reserva::find($id);
        $reserva->delete();
        return redirect('/reservas')->with('message','Segurito segurito???');
    }
}
