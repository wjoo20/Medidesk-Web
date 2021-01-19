<?php

namespace App\Http\Controllers;

use App\Reserva;
use Illuminate\Http\Request;

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
            'title' => 'required',
            'title2' => 'required',
            'title3' => 'required'

        ]);

        $reserva = new Reserva();
        $reserva -> title=$request->title;
        $reserva -> title2=$request->title2;
        $reserva -> title3=$request->title3;

        $reserva->save();

        return redirect('/reservas')->with('message', 'Reserva creada correctamente');
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
    public function edit(Reserva $reserva)
    {
        return view('auth.EditarReservas',['reserva'=> $reserva]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(SaveReserva $request, Reserva $reserva)
    {
        $reserva->update($request -> all());
        return back()->with('status', 'Reserva actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
