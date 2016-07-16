<?php

namespace Copserv\Http\Controllers\Config;

use Copserv\Config\Subcuenta;
use Illuminate\Http\Request;
use Copserv\Http\Requests\CuentaCreateRequest;
use Copserv\Http\Requests;
use Copserv\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Redirect;
use Session;

class SubcuentaController extends Controller
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
        $this->subcuenta = Subcuenta::find($route->getParameter('subcuenta'));
        //$this->notFound($this->socio);
    }

    public function index(Request $request)
    {
        //$subcuentas = subcuenta::paginate(20);
        $subcuentas = Subcuenta::all();
        /*if($request->ajax()){
            return response()->json(view('config.subcuenta.subcuentas',compact('subcuentas'))->render());
        }*/
        return view('config.subcuenta.index',compact('subcuentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.subcuenta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            Subcuenta::create($request->all());
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
        $this->subcuenta->delete();
        Session::flash('message','subcuenta Eliminado Correctamente');
        return Redirect::to('/subcuenta');
    }
}
