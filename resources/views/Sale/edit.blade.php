@extends('plantillaweb')
    @section('home_web')     
    <h2>Editar registro de ventas {{$sale->id}}</h2>
    <form action="{{route('sale.update', $sale)}}" name="venta" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label>Fecha de la venta</label>
          <input type="date" class="form-control" name="nombre" placeholder="Seleccione una fecha..." value="{{$sale->fecha_venta}}">
          <div class="mb-3">
            <select name="nombres_client" class="form-control">
                @foreach ($clients as $client)
                    <option value="{{$client->id}}">{{$client->id}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select name="nombre_product" class="form-control">
                @foreach ($products as $product)
                    <option value="{{$product->id}}">{{$product->id}}</option>
                @endforeach
            </select>
        </div>
        <label>valor del producto</label>
        <input type="text" class="form-control" name="valor_producto" placeholder="Escribe el valor..." onkeyup="venta()" value="{{$sale->valor_producto}}">
          <label> cantidad </label>
          <input type="number" class="form-control" name="cantidad" placeholder="Escriba la cantidad..."  onkeyup="venta()" value="{{$sale->cantidad}}">
          <label>total</label>
          <input type="number" class="form-control" name="total" placeholder readonly value="{{$sale->total}}">
          <label>nombre del vendedor</label>
          <input type="number" class="form-control" name="nombre_vendedor" placeholder="Escribe el nombre del vendedor..." value="{{$sale->nombre_vendedor}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
            
      </form>
      @endsection

      <script>
        function venta {
            var cantidad =document.venta.cantidad.value;
            var precio = document.venta.valor_producto.value;
    
            try{
                document.venta.total.value = (cantidad*precio);
            }catch(e){
            }
        }
    </script>