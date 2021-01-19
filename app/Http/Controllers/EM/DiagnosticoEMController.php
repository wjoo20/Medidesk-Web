<?php

namespace App\Http\Controllers\EM;

use App\AudiometriaEM;
use App\EspirometriaEM;
use App\LaboratorioEM;
use App\OdontologiaEM;
use App\OftalmologiaEM;
use App\PsicologiaEM;
use App\RadiologiaEM;
use App\EspecialidadEM;
use App\Cita;
use App\Triaje;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Http;

class DiagnosticoEMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function mostrarCita(int $dni, String $fecha, String $nombre, String $apellido)
    {
        $cita = Cita::where('dni_paciente', $dni)->where('fecha_cita', $fecha)->get();
        $triaje = Triaje::where('id_cita', $cita[0]['_id'])->get();
        $nomape = [$nombre, $apellido];
        $citaje = [$cita, $triaje];
        return view('EM.diagnostico.diagnostico-em', ['nomape' => $nomape], compact('citaje'));
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
    public function store(Request $request, int $id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DiagnosticoEM  $DiagnosticoEM
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DiagnosticoEM  $DiagnosticoEM
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DiagnosticoEM  $DiagnosticoEM
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DiagnosticoEM  $DiagnosticoEM
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
