@extends('laravel-usp-theme::master')

@section('title') Sistema USP @endsection

@section('content')

<form method="get" action="/instance">
<div class="row">
    <div class=" col-sm input-group">
    <input type="text" class="form-control" name="busca" value="{{ Request()->busca }}" placeholder="Busca por tombo..">
    <span class="input-group-btn">
        <button type="submit" class="btn btn-success"><i class="fas fa-search"></i></button>
    </span>
    </div>
</div>
</form>
</br>

{{ $instances->appends(request()->query())->links() }}

@csrf

<div class="card">
  <div class="card-body">
    <table class="table ">
      <thead class="thead ">
        @foreach($instances as $instance)
        <tr class="table  bg-light">
          <th scope="col" colspan="3"><div class="text-uppercase">Título:
              {{$instance->record->titulo }}</div></th>
          <th scope="col" ><div class="text-center font-weight-bold">Ações:</div></th>
        </tr>
      </thead>
      <tbody>
      <tr>
        <td colspan="3"><div class="font-weight-bold">Tombo:</div>{{$instance->tombo }}</td>
        <td><div class="text-center">
          <form class="row-sm" method="POST" action="/instance/{{$instance->id}}">
          <a class="btn btn-outline-success btn-md" data-toggle="tooltip" title="Editar" href="/instance/{{$instance->id}}/edit"><i class="far fa-edit"></i></a>
          <a class="btn btn-outline-success btn-md" data-toggle="tooltip" title="Ver" href="/instance/{{$instance->id}}"><i class="fas fa-external-link-alt"></i></a>
          @csrf
          @method('delete')
            <button type="submit" class=" btn btn-outline-danger btn-md" onclick="return confirm('Tem certeza que deseja apagar?');" ><i class="fas fa-trash-alt"></i></button>
          </form></div>
        </td>
        </td>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


@endsection('content')
