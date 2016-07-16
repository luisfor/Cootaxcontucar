<?php

namespace Copserv\Http\Controllers\Config;

use Copserv\Config\Grupo;
use Copserv\Config\Clase;
use Illuminate\Http\Request;
use Copserv\Http\Requests\CuentaCreateRequest;
use Copserv\Http\Requests;
use Copserv\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Redirect;
use Session;

class GrupoController extends Controller
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
        $this->grupo = Grupo::find($route->getParameter('grupo'));
        //$this->notFound($this->socio);
    }

    public function index(Request $request)
    {
        //$grupos = grupo::paginate(20);
        $grupos = Grupo::all();
        /*if($request->ajax()){
            return response()->json(view('config.grupo.grupos',compact('grupos'))->render());
        }*/
        return view('config.grupo.index',compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clases = Clase::all();
        return view('config.grupo.create', compact('clases'));
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
            Grupo::create($request->all());
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
        $this->grupo->delete();
        Session::flash('message','grupo Eliminado Correctamente');
        return Redirect::to('/grupo');
    }
}
