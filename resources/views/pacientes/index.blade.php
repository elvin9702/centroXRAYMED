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
        <a  name="" id="" class="btn text-white float-end" href="{{route('pacientes.create')}}" style="background-color: #242e64" role="button">Nuevo Paciente</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="text-white fw-bold"  style="background-color: #242e64">
              <tr class="">
                <th scope="col" class="text-left">Código</th>
                <th scope="col" class="text-center">Nombres</th>
                <th scope="col" class="text-center">Edad</th>
                <th scope="col" class="text-center">Género</th>
                <th scope="col" class="text-center">Celular</th>
                <th scope="col" class="text-center">Médico</th>
                <th colspan="2" scope="col" class="text-center">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pacientes as $paciente)
                <tr class="text-center">
                    <th>{{$paciente->id}}</th>
                    <td class="text-capitalize">{{$paciente->nombres}}</td>
                    <td>{{$paciente->edad}}</td>
                    <td class="text-uppercase">{{$paciente->genero}}</td>
                    <td>{{$paciente->celular}}</td>
                    <td class="text-uppercase">{{$paciente->medico->nombres}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm text-white" href="{{route('pacientes.edit',$paciente->id)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('pacientes.destroy',$paciente)}}" method="POST">
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