<x-app-layout>
  <div class="container my-4">
    <div class="card w-50 mx-auto">
      <div class="card-header text-uppercase h2 fw-bold text-center py-2 text-white" style="background-color: #242e64">
        Agregar Personal
      </div>
      <div class="card-body">
        <form method="POST" action="{{route('personales.update',$personal->id)}}">
          {{method_field('PATCH')}}
            @csrf
          <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el Nombre" aria-describedby="helpId" value="{{$personal->nombre}}">
          </div>
          <div class="form-group">
            <label for="">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese el Apellido" aria-describedby="helpId" value="{{$personal->apellido}}">
          </div>
          <div class="form-group">
            <label for="">Edad</label>
            <input type="number" name="edad" id="edad" class="form-control" placeholder="Ingrese" aria-describedby="helpId" value="{{$personal->edad}}">
          </div>
          <div class="form-group">
            <label for="">Número de Celular</label>
            <input type="number" name="celular" id="celular" class="form-control" placeholder="Ingrese" aria-describedby="helpId" value="{{$personal->celular}}">
          </div>
          <div class="form-group">
            <span class="text-gray-700 mt-2">Estado</span><br>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="estado" id="estado" value="activo" @if($personal->estado == 'activo') checked @endif> Activo
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="estado" id="estado" value="inactivo" @if($personal->estado == 'inactivo') checked @endif> Inactivo
                </label>
              </div>
          </div>
          <div class="form-group">
            <label for="">Rol</label>
            <select class="form-control form-control-sm" name="rol_id" id="rol_id">
              <option value="" disabled="disabled">--Seleccione una opción--</option>
              @foreach ($roles as $rol)
              <option value="{{$rol->id}}" {{ old('rol_id',$personal->rol_id) == $rol->id ? 
                'selected' : '' }}>{{$rol->name}}</option>
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