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
        <a  name="" id="" class="btn text-white float-end" href="{{route('medicos.create')}}" style="background-color: #242e64" role="button">Nuevo Médico</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="text-white fw-bold"  style="background-color: #242e64">
              <tr class="">
                <th scope="col" class="text-left">Código</th>
                <th scope="col" class="text-center">Nombres</th>
                <th scope="col" class="text-center">Fecha Nacimiento</th>
                <th scope="col" class="text-center">Género</th>
                <th scope="col" class="text-center">Estado</th>
                <th scope="col" class="text-center">Celular</th>
                <th scope="col" class="text-center">Dirección</th>
                <th scope="col" class="text-center">Rol</th>
                <th colspan="2" scope="col" class="text-center">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($medicos as $medico)
                <tr class="text-center">
                    <th>{{$medico->id}}</th>
                    <td>{{$medico->nombres}}</td>
                    <td>{{$medico->f_nacimiento}}</td>
                    <td class="text-uppercase">{{$medico->genero}}</td>
                    <td class="text-uppercase">{{$medico->estado}}</td>
                    <td>{{$medico->celular}}</td>
                    <td>{{$medico->direccion}}</td>
                    <td class="text-uppercase">{{$medico->rol->name}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm text-white" href="{{route('medicos.edit',$medico->id)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('medicos.destroy',$medico)}}" method="POST">
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