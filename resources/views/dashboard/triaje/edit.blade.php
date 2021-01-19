@extends('dashboard.master')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-thermometer-half"></i> Editar Triaje</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        @include('dashboard.partials.alert-message')
                        @include('dashboard.partials.errors-form')
                        <form action="{{ route('triaje.update', $triaje->_id) }}" method="post" class="row" >                            
                            @method('PUT')
                            @include('dashboard.triaje._form')     
                    
                            <div class="form-group col-lg-8 align-self-end">
                                    <button class="btn btn-secondary" type="reset" value="Borrar información"><i class="fa fa-fw fa-lg fa-eraser"></i>Limpiar</button>
                                    <input class="btn btn-primary" type="submit" value="Actualizar Triaje"></input>
                            </div>                       
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection