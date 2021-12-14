<x-app-layout>
  <div class="container my-4">
    <div class="card w-50 mx-auto">
      <div class="card-header text-uppercase h2 fw-bold text-center py-2 text-white" style="background-color: #242e64">
        Actualizar Médico
      </div>
      <div class="card-body">
        <form method="POST" action="{{route('medicos.update',$medico->id)}}">
          {{method_field('PATCH')}}
          @csrf
          <div class="form-group">
            <label for="">Nombres</label>
            <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Ingrese Nombres y Apellidos" aria-describedby="helpId" value="{{$medico->nombres}}">
          </div>
          <div class="form-group">
            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="f_nacimiento" id="f_nacimiento" class="form-control" placeholder="Ingrese el Apellido" aria-describedby="helpId" value="{{$medico->f_nacimiento}}">
          </div>
          <div class="form-group">
            <span class="text-gray-700 mt-2">Género</span><br>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="genero" id="genero" value="masculino" @if($medico->genero == 'masculino') checked @endif> Masculino
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="genero" id="genero" value="femenino" @if($medico->genero == 'femenino') checked @endif> Femenino
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="genero" id="genero" value="intergenero" @if($medico->genero == 'intergenero') checked @endif> Intergénero
                </label>
              </div>
          </div>
          <div class="form-group">
            <span class="text-gray-700 mt-2">Estado</span><br>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="estado" id="estado" value="activo" @if($medico->estado == 'activo') checked @endif> Activo
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="estado" id="estado" value="inactivo" @if($medico->estado == 'inactivo') checked @endif> Inactivo
                </label>
              </div>
          </div>
          <div class="form-group">
            <label for="">Número de Celular</label>
            <input type="number" min="67000000"max="80000000" name="celular" id="celular" class="form-control" placeholder="Ingrese su Número" aria-describedby="helpId" value="{{$medico->celular}}">
          </div>
          <div class="form-group">
            <label for="">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese su Dirección" aria-describedby="helpId" value="{{$medico->direccion}}">
          </div>
          <div class="form-group">
            <label for="">Rol</label>
            <select class="form-control" name="rol_id" id="rol_id">
              <option value="" selected="true" disabled="disabled">--Seleccione una opción--</option>
              @foreach ($roles as $rol)
              <option value="{{$rol->id}}" {{ old('rol_id',$medico->rol_id) == $rol->id ? 
                'selected' : '' }}>{{$rol->name}}</option>
              @endforeach
            </select>
          </div>
          </div>
          <button type="submit" class="btn mt-3 text-white fw-bold" style="background-color: #242e64">Actualizar Registro</button>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>