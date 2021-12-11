@extends('plantillaweb')

@section('home_web')
<h2> Formulario de registro - productos</h2>
        <form action="{{route('product.store')}}" method="post">
            @csrf
            <div class="mb-3">
              <label>Nombre producto</label>
              <input type="text" class="form-control" name="nombre" placeholder="Escribe el nombre del producto...">
              <label>N° Serie</label>
              <input type="number" class="form-control" name="num_serie" placeholder="Escriba el número de serie...">
              <label>Marca</label>
              <input type="text" class="form-control" name="marca" placeholder="Escriba la marca del producto...">
              <label>Proveedor</label>
              <input type="text" class="form-control" name="proveedor" placeholder="Escribe el proveedor...">
              <label>Valor producto</label>
              <input type="number" class="form-control" name="valor_producto" placeholder="Escribe el valor...">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
@endsection