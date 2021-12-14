<x-app-layout>
    <div class="container my-4">
      <div class="card w-50 mx-auto">
        <div class="card-header text-uppercase h2 fw-bold text-center py-2 text-white" style="background-color: #242e64">
          Agregar Paciente
        </div>
        <div class="card-body">
          <form method="POST" action="{{route('pacientes.store')}}">
            @csrf
            <div class="form-group">
              <label for="">Nombres</label>
              <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Ingrese Nombres y Apellidos" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Edad</label>
              <input type="number" name="edad" id="edad" min="0" max="100" class="form-control" placeholder="Ingrese Edad" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <span class="text-gray-700 mt-2">Género</span><br>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="genero" id="genero" value="masculino" checked> Masculino
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="genero" id="genero" value="femenino"> Femenino
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="genero" id="genero" value="intergenero"> Intergénero
                  </label>
                </div>
            </div>
            
            <div class="form-group">
              <label for="">Número de Celular</label>
              <input type="number" min="67000000"max="80000000" name="celular" id="celular" class="form-control" placeholder="Ingrese su Número" aria-describedby="helpId">
            </div>
            
            <div class="form-group">
              <label for="">Médico</label>
              <select class="form-control" name="medico_id" id="medico_id">
                <option value="" selected="true" disabled="disabled">--Seleccione una opción--</option>
                @foreach ($medicos as $medico)
                <option value="{{$medico->id}}">{{$medico->nombres}}</option>
                @endforeach
              </select>
            </div>
            </div>
            <button type="submit" class="btn mt-3 text-white fw-bold" style="background-color: #242e64">Guardar Registro</button>
          </form>
        </div>
      </div>
    </div>
</x-app-layout>