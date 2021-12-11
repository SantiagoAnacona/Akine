@extends('plantillaweb')

@section('home_web')

<table class="table table-danger">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">fecha de la venta</th>
        <th scope="col">cliente</th>
        <th scope="col">producto</th>
        <th scope="col">valor del producto</th>
        <th scope="col">cantidad</th>
        <th scope="col">total</th>
        <th scope="col">nombre_vendedor</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($sales as $sale)
      <tr>
        <th scope="row">{{$sale->id}}</th>
        <td>{{$sale->fecha_venta}}</td>
        <td>{{$sale->id_client}}</td>
        <td>{{$sale->id_product}}</td>
        <td>{{$sale->valor_producto}}</td>
        <td>{{$sale->cantidad}}</td>
        <td>{{$sale->total}}</td>
        <td>{{$sale->nombre_vendedor}}</td>
        <td>
          <a href="{{route('sale.edit', $sale)}}">
           <button type="button" class="btn btn-warning btn-sm">Editar</button>
          </a>
        </td>
        <td>
          <form action="{{route('sale.destroy', $sale)}}" method="post">
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