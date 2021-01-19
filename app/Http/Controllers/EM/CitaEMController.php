<?php

namespace App\Http\Controllers\EM;

use App\AudiometriaEM;
use App\EspirometriaEM;
use App\LaboratorioEM;
use App\OdontologiaEM;
use App\OftalmologiaEM;
use App\PsicologiaEM;
use App\RadiologiaEM;
use App\Especialidad;
use App\Medico;
use App\Cita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Http;

class CitaEMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $id)
    {
        //Activar cuando reciba dni
        //$med = Medico::where('dni', $id)->get();
        // $esp = Especialidad::where('nombre', $med[0]['especialidad'])->get();
        // $idEsp = $esp[0]['_id'];
        $idEsp = $id;
        $cit = Http::get('http://localhost:5000/turns/'.$idEsp);
        $citas = $cit->json();
        return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
    }

    public function filtrarFecha(Request $request, int $idEsp)
    {
        switch ($idEsp) 
        {
        case 1:
            $citas = AudiometriaEM::where('estado', 'P')->where('fecha', $request->fecha)->get();
            return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
        case 2:
            $citas = LaboratorioEM::where('estado', 'P')->where('fecha', $request->fecha)->get();
            return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
        case 3:
            $citas = OftalmologiaEM::where('estado', 'P')->where('fecha', $request->fecha)->get();
            return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
        case 4:
            $citas = PsicologiaEM::where('estado', 'P')->where('fecha', $request->fecha)->get();
            return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
        case 5:
            $citas = RadiologiaEM::where('estado', 'P')->where('fecha', $request->fecha)->get();
            return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
        case 6:
            $citas = EspirometriaEM::where('estado', 'P')->where('fecha', $request->fecha)->get();
            return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
        case 7:
            $citas = OdontologiaEM::where('estado', 'P')->where('fecha', $request->fecha)->get();
            return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
        }
    }

    public function filtrarDni(Request $request, int $idEsp)
    {
        switch ($idEsp) 
        {
        case 1:
            $citas = AudiometriaEM::where('cita.dni', $request->dni)->where('estado','P')->get();
            return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
        case 2:
            $citas = LaboratorioEM::where('cita.dni', $request->dni)->where('estado','P')->get();
            return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
        case 3:
            $citas = OftalmologiaEM::where('cita.dni', $request->dni)->where('estado','P')->get();
            return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
        case 4:
            $citas = PsicologiaEM::where('cita.dni', $request->dni)->where('estado','P')->get();
            return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
        case 5:
            $citas = RadiologiaEM::where('cita.dni', $request->dni)->where('estado','P')->get();
            return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
        case 6:
            $citas = EspirometriaEM::where('cita.dni', $request->dni)->where('estado','P')->get();
            return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
        case 7:
            $citas = OdontologiaEM::where('cita.dni', $request->dni)->where('estado','P')->get();
            return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $idEsp]);
        }
    }

    public function registrar(int $id)
    {
        Http::put('http://localhost:5000/turns/'.$id);
        $cit = Http::get('http://localhost:5000/turns/'.$id);
        $citas = $cit->json();
        return view('EM.citas.cita-em', compact('citas'), ['idEsp' => $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CitaEM  $citaEM
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $citaEM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CitaEM  $citaEM
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $citaEM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CitaEM  $citaEM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $citaEM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CitaEM  $citaEM
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $citaEM)
    {
        //
    }
}
