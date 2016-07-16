<?php

namespace Coocaxcontucar\Http\Controllers\Cliente\Vehiculo;

use Illuminate\Http\Request;
use Coocaxcontucar\Vehiculo;
use Coocaxcontucar\Http\Requests;
use Coocaxcontucar\Http\Requests\VehiculoCreateRequest;
use Coocaxcontucar\Http\Controllers\Controller;
use Redirect;
use Session;
use Illuminate\Routing\Route;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
        //$this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->vehiculo = Vehiculo::find($route->getParameter('vehiculo'));
    }

    public function index(Request $request)
    {
        $vehiculos = Vehiculo::paginate(10);
        if($request->ajax()){
            return response()->json(view('vehiculo.vehiculos',compact('vehiculos'))->render());
        }
        return view('cliente.vehiculo.index',compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title  = 'Registrar Vehiculo';
        return view('cliente.vehiculo.create', ['page_title'=> $page_title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculoCreateRequest $request)
    {
        Vehiculo::create($request->all());
        Session::flash('message','Vehiculo Creado Correctamente');
        return Redirect::to('/vehiculo');
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
