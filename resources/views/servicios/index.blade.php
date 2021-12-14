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
        <a  name="" id="" class="btn text-white float-end" href="{{route('servicios.create')}}" style="background-color: #242e64" role="button">Nuevo Servicio</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="text-white fw-bold"  style="background-color: #242e64">
              <tr class="">
                <th scope="col" class="text-center">Código</th>
                <th scope="col" class="text-center">Nombre</th>
                <th scope="col" class="text-center">Precio</th>
                <th scope="col" class="text-center">Estado</th>
                <th scope="col" class="text-center">Personal</th>
                <th colspan="2" scope="col" class="text-center">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($servicios as $servicio)
                <tr class="text-center">
                    <th class="text-left">{{$servicio->id}}</th>
                    <td>{{$servicio->nombre}}</td>
                    <td>{{$servicio->precio}}</td>
                    <td>{{$servicio->estado}}</td>
                    <td>{{$servicio->personal->nombre}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm text-white" href="{{route('servicios.edit',$servicio->id)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('servicios.destroy',$servicio)}}" method="POST">
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