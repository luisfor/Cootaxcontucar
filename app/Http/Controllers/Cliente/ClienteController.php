<?php

namespace Coocaxcontucar\Http\Controllers\Cliente;

use Coocaxcontucar\Vehiculo;
use Illuminate\Http\Request;
use Coocaxcontucar\Cliente;
use Coocaxcontucar\Http\Requests;
use Coocaxcontucar\Http\Requests\ClienteCreateRequest;
use Coocaxcontucar\Http\Controllers\Controller;
use Redirect;
use Session;
use Illuminate\Routing\Route;

class ClienteController extends Controller
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
        $this->cliente = Cliente::find($route->getParameter('cliente'));
    }

    public function index(Request $request)
    {
        $clientes = \DB::table('clientes')
            ->join('vehiculos', 'vehiculos.id','=','clientes.vehiculo_id')
            ->select('clientes.*','vehiculos.placa')
            ->paginate(10);
        //$clientes = Cliente::paginate(10);
        /*if($request->ajax()){
            return response()->json(view('cliente.clientes',compact('clientes'))->render());
        }*/
        return view('cliente.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title  = 'Registrar Cliente';
        $vehiculos = Vehiculo::lists('placa', 'id');
        return view('cliente.create', ['page_title'=> $page_title, 'vehiculos' => $vehiculos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteCreateRequest $request)
    {
        $request['tipo_tercero'] = 'cliente';
        Cliente::create($request->all());
        Session::flash('message','Cliente Creado Correctamente');
        return Redirect::to('/cliente');
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
        $vehiculos = Vehiculo::lists('placa', 'id');
        return view('cliente.edit',['cliente'=>$this->cliente, 'vehiculos'=>$vehiculos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteCreateRequest $request, $id)
    {
        $this->cliente->fill($request->all());
        $this->cliente->save();
        Session::flash('message','Cliente Actualizado Correctamente');
        return Redirect::to('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->cliente->delete();
        Session::flash('message','Cliente Eliminado Correctamente');
        return Redirect::to('/cliente');
    }
}
