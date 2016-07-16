<?php

namespace Coocaxcontucar\Http\Controllers;

use Coocaxcontucar\Ingreso;
use Coocaxcontucar\Cliente;
use Illuminate\Http\Request;
use Coocaxcontucar\Http\Requests\CreateIngresoRequest;
use Coocaxcontucar\Http\Requests;
use Coocaxcontucar\Http\Controllers\Controller;
use Redirect;
use Session;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ingresos = Ingreso::paginate(10);
        if($request->ajax()){
            return response()->json(view('ingreso.ingresos',compact('ingresos'))->render());
        }

        return view('ingreso.index',compact('ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title  = 'Facturación';
        $page_description = 'Ingreso';
        $clientes = Cliente::lists('documento', 'id');
        return view('ingreso.create',compact('page_title','page_description','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateIngresoRequest $request)
    {

        $debito = $request['debito'];
        $iva = $request['iva'];
        $iva_debito = $iva / 100;

        $total = ((FLOAT)$iva_debito * (FLOAT)$debito) + (FLOAT)$debito;
        $total = (FLOAT)$total;

        $request['cod_cliente'] = 1305;
        $request['cod_iva'] = 2408;
        $request['cod_ingreso'] = 4105;
        $request['credito'] = $total;

        Ingreso::create($request->all());

        Session::flash('message','Comprobante de Ingreso Creado Correctamente');
        return Redirect::to('/ingreso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
