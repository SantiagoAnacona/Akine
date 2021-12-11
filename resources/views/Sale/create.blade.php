@extends('plantillaweb')

@section('home_web')
<h2> Formulario de ventas</h2>
        <form action="{{route('sale.store')}}" name="ventaF" method="post">
            @csrf
            <div class="mb-3">
              <label>Fecha de venta</label>
              <input type="date" class="form-control" name="fecha_venta" placeholder="Seleccione una fecha...">
              <div class="mb-3">
                <select name="id_client" class="form-control">
                    @foreach ($clients as $client)
                        <option value="{{$client->id}}">{{$client->nombres}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <select name="id_product" class="form-control">
                    @foreach ($products as $product)
                        <option value="{{$product->id}}">{{$product->nombre}}</option>
                    @endforeach
                </select>
            </div>
              <label>valor del producto</label>
              <input type="number" class="form-control" name="valor_producto" placeholder="Escribe el valor..." onkeyup="ventaT()">
              <label>cantidad</label>
              <input type="number" class="form-control" name="cantidad" placeholder="Escriba la cantidad..."  onkeyup="ventaT()">
              <label>total</label>
              <input type="number" class="form-control" name="total" placeholder readonly>
              <label>nombre del vendedor</label>
              <input type="text" class="form-control" name="nombre_vendedor" placeholder="Escribe el nombre del vendedor...">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
@endsection

<script>
    function ventaT() {
        var cantidadT =document.ventaF.cantidad.value;
        var precioU = document.ventaF.valor_producto.value;

        try{
            document.ventaF.total.value = (cantidadT*precioU);
        }catch(e){
        }
    }
</script>