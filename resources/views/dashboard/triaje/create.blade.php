@extends('dashboard.master')

@section('content')

    
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-thermometer-half"></i> Crear Triaje</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        @include('dashboard.partials.alert-message')
                        @include('dashboard.partials.errors-form')
                        <form action="{{ route('triaje.store') }}" method="post" class="row" >                            

                            @include('dashboard.triaje._form')
                            
                                                
                            <div class="form-group col-lg-8 align-self-end">
                                    <button class="btn btn-secondary" type="reset" value="Borrar información"><i class="fa fa-fw fa-lg fa-eraser"></i>Limpiar</button>
                                    <input class="btn btn-primary" type="submit" value="Guardar Triaje"></input>
                            </div>  

                            <div class="form-group">
                                    <input id="id_cita" name="id_cita" class="form-control bg-transparent" type="text" value="{{ old('id_cita', $triaje->id_cita=$cita->_id) }}" style="border:none !important; color:white;">
                            </div>                     
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection