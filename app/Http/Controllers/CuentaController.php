<?php

namespace Coocaxcontucar\Http\Controllers;

use Coocaxcontucar\Cuenta;
use Illuminate\Http\Request;
use Coocaxcontucar\Http\Requests\CuentaCreateRequest;
use Coocaxcontucar\Http\Requests;
use Coocaxcontucar\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Redirect;
use Session;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
        //$this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['destroy']]);
    }

    public function find(Route $route){
        $this->cuenta = Cuenta::find($route->getParameter('cuenta'));
        //$this->notFound($this->socio);
    }

    public function index(Request $request)
    {
        $cuentas = Cuenta::paginate(20);
        if($request->ajax()){
            return response()->json(view('config.cuenta.cuentas',compact('cuentas'))->render());
        }
        return view('config.cuenta.index',compact('cuentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.cuenta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CuentaCreateRequest $request)
    {
        if($request->ajax()){
            Cuenta::create($request->all());
            return response()->json([
                "mensaje" => "creado"
            ]);
        }
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
        $this->cuenta->delete();
        Session::flash('message','Cuenta Eliminado Correctamente');
        return Redirect::to('/cuenta');
    }
}
