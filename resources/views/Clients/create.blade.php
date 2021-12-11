@extends('plantillaweb')

@section('home_web')
<h2> Formulario de registro - clientes </h2>
        <form action="{{route('client.store')}}" method="post">
            @csrf
            <div class="mb-3">
              <label>Nombres completos</label>
              <input type="text" class="form-control" name="nombres" placeholder="Escribe el nombre completo...">
              <label>N° Documento</label>
              <input type="number" class="form-control" name="num_documento" placeholder="Escriba su número de documento...">
              <label>Celular</label>
              <input type="number" class="form-control" name="celular" placeholder="Escribe su número de telefono...">
              <label>Dirección</label>
              <input type="text" class="form-control" name="dirección" placeholder="Escriba su dirección...">
              <label>Correo electronico</label>
              <input type="email" class="form-control" name="correo" placeholder="Escribe su correo electronico...">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
@endsection