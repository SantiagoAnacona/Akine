@extends('plantillaweb')

@section('home_web')

<table class="table table-danger">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">N° Serie</th>
        <th scope="col">Marca</th>
        <th scope="col">Proveedor</th>
        <th scope="col">Valor producto</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->nombre}}</td>
        <td>{{$product->num_serie}}</td>
        <td>{{$product->marca}}</td>
        <td>{{$product->proveedor}}</td>
        <td>{{$product->valor_producto}}</td>
        <td>
          <a href="{{route('product.edit', $product)}}">
           <button type="button" class="btn btn-warning btn-sm">Editar</button>
          </a>
        </td>
        <td>
          <form action="{{route('product.destroy', $product)}}" method="post">
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