<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveTriaje;
use App\Triaje;
use App\Cita;
use App\Paciente;
use Illuminate\Http\Request;

class TriajeController extends Controller
{
    public function index()
    {
        $triajes = Triaje::get();  
        /*
        $cita = '';  
        $id_cita = '';
        foreach($triajes as $t){
            $id_cita = $t->id_cita;
            $cita = Cita::find($id_cita);            
        }*/
        $citas = Cita::get(); 

        return view('dashboard.triaje.index',['triaje'=> $triajes],['cita'=> $citas]);        
    }

    public function listarCita()
    {
        $citas = Cita::where('estado','C')->get();        
        //dd($citas);
        return view('dashboard.triaje.listarCita',['cita'=> $citas]);
    }

    public function create()
    {
        return view('dashboard.triaje.create', ['triaje' => new Triaje()]);
    }

    public function store(SaveTriaje $request)
    {
        $triaje = new Triaje;
        $triaje->id_cita = $request->get('id_cita');
        $triaje->peso = $request->get('peso');
        $triaje->talla = $request->get('talla');
        $triaje->cintura = $request->get('cintura');
        $triaje->cadera = $request->get('cadera');
        $triaje->presion_arterial = $request->get('presion_arterial');
        $triaje->frecuencia_cardiaca = $request->get('frecuencia_cardiaca');
        $triaje->frecuencia_respiratoria = $request->get('frecuencia_respiratoria');
        $triaje->saturacion_oxigeno = $request->get('saturacion_oxigeno');
        $triaje->temperatura = $request->get('temperatura');
        $triaje->dni_enfermera = $request->get('dni_enfermera');
        $triaje->save();

        /*Actualizar campo estado_triaje en cita*/
        $cita = Cita::find($triaje->id_cita);
        $cita->estado_triaje = 'S';
        $cita->save();

        
        //Triaje::create($request->validated());
        return back()->with('status','Guardado correctamente.');
    }

    public function edit(Triaje $triaje)
    {
        return view('dashboard.triaje.edit', ['triaje' => $triaje, 'cita'=>Cita::pluck('_id')]);
    }

    public function update(SaveTriaje $request, Triaje $triaje)
    {
        $triaje->update($request->validated());
        return back()->with('status','Actualizado correctamente.');
    }
    
    public function destroy(Request $request)
    {
        $triaje_id = $request->get('triaje_id');
        $triaje = Triaje::find($triaje_id);
        /*Actualizar campo estado_triaje en cita 'N'*/
        $cita = Cita::find($triaje->id_cita);
        $cita->estado_triaje = 'N';
        $cita->save();
        $triaje->delete();
        return redirect('dashboard/triaje')->with('status','Eliminado Correctamente');      
        
    }

    public function getIdCita($cita_id)
    {
        $cita = Cita::find($cita_id);
        return view('dashboard.triaje.create', ['triaje' => new Triaje()],['cita'=> $cita]);
    }
}
