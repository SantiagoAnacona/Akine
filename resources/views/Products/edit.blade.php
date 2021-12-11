@extends('plantillaweb')
    @section('home_web')     
    <h2>Editar registro de productos {{$product->id}}</h2>
    <form action="{{route('product.update', $product)}}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label>Nombre producto</label>
            <input type="text" class="form-control" name="nombre" placeholder="Escribe el nombre del producto..." value="{{$product->nombre}}">
            <label>N° Serie</label>
            <input type="number" class="form-control" name="num_serie" placeholder="Escriba el número de serie..."value="{{$product->num_serie}}">
            <label>Marca</label>
            <input type="text" class="form-control" name="marca" placeholder="Escriba la marca del producto..."value="{{$product->marca}}">
            <label>Proveedor</label>
            <input type="text" class="form-control" name="proveedor" placeholder="Escribe el proveedor..."value="{{$product->proveedor}}">
            <label>Valor producto</label>
            <input type="number" class="form-control" name="valor_producto" placeholder="Escribe el valor..."value="{{$product->valor_producto}}">
          </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
      @endsection