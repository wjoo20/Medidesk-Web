@csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dni_enfermera" class="control-label">Dni Enfermera</label>
                                    <input id="dni_enfermera" name="dni_enfermera" class="form-control" type="text" value="{{ old('dni_enfermera', $triaje->dni_enfermera) }}">
                                </div>
                                <div class="form-group">
                                    <label for="peso" class="control-label">Peso</label>
                                    <input id="peso" name="peso" class="form-control" type="text" value="{{ old('peso', $triaje->peso) }}">
                                </div>
                                <div class="form-group">
                                    <label for="talla" class="control-label">Talla</label>
                                    <input id="talla" name="talla" class="form-control" type="text" value="{{ old('talla',$triaje->talla) }}">
                                </div>
                                <div class="form-group">
                                    <label for="cintura"  class="control-label">Cintura</label>
                                    <input id="cintura" name="cintura" class="form-control" type="text" value="{{ old('cintura', $triaje->cintura) }}">
                                </div>
                                <div class="form-group">
                                    <label for="cadera" class="control-label">Cadera</label>
                                    <input id="cadera" name="cadera" class="form-control" type="text" value="{{ old('cadera', $triaje->cadera) }}">
                                </div>
                            </div>
                            <div class="col-md-6">                           
                                <div class="form-group">
                                    <label for="presion_arterial" class="control-label">Presión Arterial</label>
                                    <input id="presion_arterial" name="presion_arterial" class="form-control" type="text" value="{{ old('presion_arterial', $triaje->presion_arterial) }}">
                                </div>
                                <div class="form-group">
                                    <label for="frecuencia_cardiaca" class="control-label">Frecuencia Cardíaca</label>
                                    <input id="frecuencia_cardiaca" name="frecuencia_cardiaca" class="form-control" type="text" value="{{ old('frecuencia_cardiaca', $triaje->frecuencia_cardiaca) }}">
                                </div>
                                <div class="form-group">
                                    <label for="frecuencia_respiratoria" class="control-label">Frecuencia Respiratoria</label>
                                    <input id="frecuencia_respiratoria" name="frecuencia_respiratoria" class="form-control" type="text" value="{{ old('frecuencia_respiratoria', $triaje->frecuencia_respiratoria) }}">
                                </div>
                                <div class="form-group">
                                    <label for="saturacion_oxigeno" class="control-label">Saturación de Oxígeno</label>
                                    <input id="saturacion_oxigeno" name="saturacion_oxigeno" class="form-control" type="text" value="{{ old('saturacion_oxigeno', $triaje->saturacion_oxigeno) }}">
                                </div>
                                <div class="form-group">
                                    <label for="temperatura"class="control-label">Temperatura</label>
                                    <input id="temperatura" name="temperatura" class="form-control" type="text" value="{{ old('temperatura', $triaje->temperatura) }}">
                                </div>
                                
                                
                            </div>