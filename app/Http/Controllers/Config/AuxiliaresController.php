<?php

namespace Copserv\Http\Controllers\Config;

use Copserv\Config\Auxiliares;
use Illuminate\Http\Request;
use Copserv\Http\Requests\CuentaCreateRequest;
use Copserv\Http\Requests;
use Copserv\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Redirect;
use Session;

class AuxiliaresController extends Controller
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
        $this->auxiliares = Auxiliares::find($route->getParameter('auxiliares'));
        //$this->notFound($this->socio);
    }

    public function index(Request $request)
    {
        //$auxiliares = auxiliares::paginate(20);
        $auxiliares = Auxiliares::all();
        /*if($request->ajax()){
            return response()->json(view('config.auxiliares.auxiliares',compact('auxiliares'))->render());
        }*/
        return view('config.auxiliares.index',compact('auxiliares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.auxiliares.create');
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
            Auxiliares::create($request->all());
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
        $this->auxiliares->delete();
        Session::flash('message','auxiliares Eliminado Correctamente');
        return Redirect::to('/auxiliares');
    }
}
