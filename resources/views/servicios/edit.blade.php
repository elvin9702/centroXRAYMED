<x-app-layout>
  <div class="container my-4">
    <div class="card w-50 mx-auto">
      <div class="card-header text-uppercase h2 fw-bold text-center py-2 text-white" style="background-color: #242e64">
        Agregar Servicio
      </div>
      <div class="card-body">
        <form method="POST" action="{{route('servicios.update',$servicio->id)}}">
          {{method_field('PATCH')}}
          @csrf
          <div class="form-group mb-2">
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el Nombre" aria-describedby="helpId" value="{{$servicio->nombre}}">
          </div>
          <div class="form-group mb-2">
            <label for="">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control" placeholder="Ingrese el Apellido" aria-describedby="helpId" value="{{$servicio->precio}}">
          </div>
          <div class="form-group mb-2">
            <span class="text-gray-700 mt-2">Estado</span><br>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="estado" id="estado" value="activo" @if($servicio->estado == 'activo') checked @endif> Activo
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="estado" id="estado"value="inactivo" @if($servicio->estado == 'inactivo') checked @endif> Inactivo
                </label>
              </div>
          </div>
          <div class="form-group mb-2">
            <label for="">Personal</label>
            <select class="form-control" name="personal_id" id="personal_id">
              <option value="" disabled="disabled">--Seleccione una opción--</option>
              @foreach ($personales as $personal)
              <option value="{{$personal->id}}" {{ old('personal_id',$servicio->personal_id) == $personal->id ? 
                'selected' : '' }}>{{$personal->nombre}}</option>
              @endforeach
            </select>
          </div>
          </div>
          <button type="submit" class="btn mt-3 mb-2 text-white fw-bold" style="background-color: #242e64">Guardar Registro</button>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>