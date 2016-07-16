<?php

namespace Coocaxcontucar\Http\Controllers\Proveedor;

use Illuminate\Http\Request;
use Coocaxcontucar\Provider;
use Coocaxcontucar\Http\Requests;
use Coocaxcontucar\Http\Requests\TercerosCreateRequest;
use Coocaxcontucar\Http\Controllers\Controller;
use Redirect;
use Session;
use Illuminate\Routing\Route;

class ProveedorController extends Controller
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
        $this->proveedor = Provider::find($route->getParameter('proveedor'));
    }

    public function index(Request $request)
    {
        $providers = Provider::paginate(10);
        if($request->ajax()){
            return response()->json(view('proveedor.providers',compact('providers'))->render());
        }
        return view('proveedor.index',compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title  = 'Registrar Proveedor';
        return view('proveedor.create', ['page_title'=> $page_title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TercerosCreateRequest $request)
    {
        $request['tipo_tercero'] = 'proveedor';
        Provider::create($request->all());
        Session::flash('message','Proveecor Creado Correctamente');
        return Redirect::to('/proveedor');
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
        return view('proveedor.edit',['proveedor'=>$this->proveedor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TercerosCreateRequest $request, $id)
    {
        $this->proveedor->fill($request->all());
        $this->proveedor->save();
        Session::flash('message','Proveedor Actualizado Correctamente');
        return Redirect::to('/proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->proveedor->delete();
        Session::flash('message','Proveedor Eliminado Correctamente');
        return Redirect::to('/proveedor');
    }
}
