<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\product;
use App\Models\sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = sale::simplePaginate(5);
        return view('Sale.index',compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = client::all();
        $products = product::all();
        return view('sale.create', compact('clients','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sale = new sale ();
        $sale ->fecha_venta = $request->fecha_venta;
        $sale ->id_client = $request->id_client;
        $sale ->id_product= $request->id_product;
        $sale ->valor_producto = $request->valor_producto;
        $sale ->cantidad = $request->cantidad;
        $sale ->total = $request->total;
        $sale ->nombre_vendedor = $request->nombre_vendedor;
        $sale ->save();
        return redirect()->route('sale.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(sale $sale)
    {
        return view('Sale.edit', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sale $sale)
    {
        $sale = new sale ();
        $sale ->fecha_venta = $request->fecha_venta;
        $sale ->nombres_client = $request->nombres_client;
        $sale ->nombre_product= $request->nombre_product;
        $sale ->valor_product = $request->valor_product;
        $sale ->total = $request->total;
        $sale ->nombre_vendedor = $request->nombre_vendedor;
        $sale ->save();
        return redirect()->route('sale.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(sale $sale)
    {
        $sale->delete();
        return redirect()->route('Sale.index');
    }
}
