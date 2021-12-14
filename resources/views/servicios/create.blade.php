<x-app-layout>
    <div class="container my-4">
      <div class="card w-50 mx-auto">
        <div class="card-header text-uppercase h2 fw-bold text-center py-2 text-white" style="background-color: #242e64">
          Agregar Servicio
        </div>
        <div class="card-body">
          <form method="POST" action="{{route('servicios.store')}}">
            @csrf
            <div class="form-group mb-2">
              <label for="">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el Nombre" aria-describedby="helpId">
            </div>
            <div class="form-group mb-2">
              <label for="">Precio</label>
              <input type="number" name="precio" id="precio" class="form-control" placeholder="Ingrese el Precio" aria-describedby="helpId">
            </div>
            <div class="form-group mb-2">
              <span class="text-gray-700 mt-2">Estado</span><br>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="estado" id="estado" value="activo" checked> Activo
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="estado" id="estado" value="inactivo"> Inactivo
                  </label>
                </div>
            </div>
            <div class="form-group mb-2">
              <label for="">Personal</label>
              <select class="form-control" name="personal_id" id="personal_id">
                <option value="" selected="true" disabled="disabled">--Seleccione una opción--</option>
                @foreach ($personales as $personal)
                <option value="{{$personal->id}}">{{$personal->nombre}}</option>
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