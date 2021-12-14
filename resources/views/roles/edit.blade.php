<x-app-layout>
  <div class="container my-4">
    <div class="card w-50 mx-auto">
      <div class="card-header text-uppercase h2 fw-bold text-center py-4 text-white" style="background-color: #242e64">
        Editar el Rol
      </div>
      <div class="card-body">
        <form method="POST" action="{{route('roles.update',$rol->id)}}">
          {{method_field('PATCH')}}
          @csrf
          <div class="form-group">
            <label for="">Nombre del Rol</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$rol->name}}" placeholder="" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="">Descripción del Rol</label>
            <input type="text" name="description" id="description" class="form-control" value="{{$rol->description}}" placeholder="" aria-describedby="helpId">
          </div>
          <button type="submit" class="btn mt-3 text-white" style="background-color: #242e64">Actualizar Registro</button>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>