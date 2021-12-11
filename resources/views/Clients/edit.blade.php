@extends('plantillaweb')
    @section('home_web')     
    <h2>Editar registro de estudiante {{$client->id}}</h2>
    <form action="{{route('client.update', $client)}}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
        
          <label>Nombres completos</label>
          <input type="text" class="form-control" name="nombres" placeholder="Escribe el nombre completo..." value="{{$client->nombres}}">
          <label>N° Documento</label>
          <input type="number" class="form-control" name="num_documento" placeholder="Escriba su número de tarjeta..." value="{{$client->num_documento}}">
          <label>Celular</label>
          <input type="number" class="form-control" name="celular" placeholder="Escribe su número de telefono..." value="{{$client->celular}}">
          <label>Dirección</label>
          <input type="text" class="form-control" name="dirección" placeholder="Escribe tu dirección..." value="{{$client->dirección}}">
          <label>Correo electronico</label>
          <input type="email" class="form-control" name="correo" placeholder="Escribe su correo electronico..." value="{{$client->correo}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
      @endsection