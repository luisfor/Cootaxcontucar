<?php

namespace Coocaxcontucar\Http\Controllers;

use Coocaxcontucar\Egreso;
use Coocaxcontucar\Cliente;
use Illuminate\Http\Request;
use Coocaxcontucar\Http\Requests\CreateEgresoRequest;
use Coocaxcontucar\Http\Requests;
use Coocaxcontucar\Http\Controllers\Controller;
use Redirect;
use Session;

class EgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $egresos = egreso::paginate(10);
        if($request->ajax()){
            return response()->json(view('egreso.egresos',compact('egresos'))->render());
        }

        return view('egreso.index',compact('egresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title  = 'Facturación';
        $page_description = 'Egreso';

        $clientes = Cliente::lists('documento', 'id');
        return view('egreso.create',compact('page_title','page_description','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEgresoRequest $request)
    {

        $debito = $request['debito'];
        $debito = (FLOAT)$debito;
        $request['debito'] = $debito;
        $request['credito'] = $debito;

        $request['cod_cliente'] = 1305;

        if($request['tipo_egreso'] == 1110){
            $request['tipo_egreso'] = 'BANCO';
            $request['cod_egreso'] = 1110;
        }else if($request['tipo_egreso'] == 1105){
            $request['tipo_egreso'] = 'EFECTIVO';
            $request['cod_egreso'] = 1105;
        }

        Egreso::create($request->all());

        Session::flash('message','Comprobante de Egreso Creado Correctamente');
        return Redirect::to('/egreso');
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
