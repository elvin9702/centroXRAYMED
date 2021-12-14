<x-app-layout>
  <div class="container my-4">
  @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif
  @if (session('updated'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{session('updated')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif
  @if (session('deleted'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{session('deleted')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif
  <div class="card">
    <div class="card-header">
        <a  name="" id="" class="btn text-white float-end" href="{{route('roles.create')}}" style="background-color: #242e64" role="button">Nuevo Rol</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="text-white fw-bold" style="background-color: #242e64">
              <tr class="">
                <th scope="col" class="text-left">Código</th>
                <th scope="col" class="text-center">Nombre del Rol</th>
                <th scope="col" class="text-center">Descripción</th>
                <th colspan="2" scope="col" class="text-center">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($roles as $rol)
                <tr class="text-center">
                    <th>{{$rol->id}}</th>
                    <td>{{$rol->name}}</td>
                    <td>{{$rol->description}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm text-white" href="{{route('roles.edit',$rol->id)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('roles.destroy',$rol)}}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm text-white" type="submit" onclick="return confirm('Confirmar Eliminación')">Eliminar</button>
                        </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
  </div>      
  </div>
</x-app-layout>