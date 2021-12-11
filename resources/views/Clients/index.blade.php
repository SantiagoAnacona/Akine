@extends('plantillaweb')

@section('home_web')

<table class="table table-danger">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombres</th>
        <th scope="col">N° Documento</th>
        <th scope="col">Celular</th>
        <th scope="col">Dirección</th>
        <th scope="col">Correo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
      <tr>
        <th scope="row">{{$client->id}}</th>
        <td>{{$client->nombres}}</td>
        <td>{{$client->num_documento}}</td>
        <td>{{$client->celular}}</td>
        <td>{{$client->dirección}}</td>
        <td>{{$client->correo}}</td>
        <td>
          <a href="{{route('client.edit', $client)}}">
           <button type="button" class="btn btn-warning btn-sm">Editar</button>
          </a>
        </td>
        <td>
          <form action="{{route('client.destroy', $client)}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-info btn-sm">Eliminar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection