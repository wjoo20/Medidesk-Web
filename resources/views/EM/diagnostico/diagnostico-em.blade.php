@extends('EM.master')

@section('content')
    <main class="app-content">
        <form action="/em/citas/{{$citaje[0][0]['especialidad']}}/registrar">
            <div class="">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label" for="readOnlyInput">Nombres: </label>
                        <label class="control-label">{{ $nomape[0] }}</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="readOnlyInput">Apellido: </label>
                        <label class="control-label">{{ $nomape[1] }}</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="readOnlyInput">Talla: </label>
                        <label class="control-label">{{ $citaje[1][0]['talla'] }}</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="readOnlyInput">Peso: </label>
                        <label class="control-label">{{ $citaje[1][0]['peso'] }}</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="readOnlyInput">Cintura: </label>
                        <label class="control-label">{{ $citaje[1][0]['cintura'] }}</label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label" for="readOnlyInput">Cadera: </label>
                        <label class="control-label">{{ $citaje[1][0]['cadera'] }}</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="readOnlyInput">Presión: </label>
                        <label class="control-label">{{ $citaje[1][0]['presion_arterial'] }}</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="readOnlyInput">Frecuencia Cardiaca: </label>
                        <label class="control-label">{{ $citaje[1][0]['frecuencia_cardiaca'] }}</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="readOnlyInput">Frecuencia respiratoria: </label>
                        <label class="control-label">{{ $citaje[1][0]['frecuencia_respiratoria'] }}</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="readOnlyInput">Saturación de oxígeno: </label>
                        <label class="control-label">{{ $citaje[1][0]['saturacion_oxigeno'] }}</label>
                    </div>
                </div>
            </div>           
            <div class="form-group">
                <label class="control-label" for="readOnlyInput">Diagnóstico: </label>
                <input type="text" class="form-control" placeholder="" id="diag" name="diag">
            </div>
            <label class="control-label" for="readOnlyInput">Indicaciones: </label>
            <div class="form-group">              
                <textarea name="indi" id="indi" cols="110" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Finalizar</button>     
        </form>
    </main>
@endsection
