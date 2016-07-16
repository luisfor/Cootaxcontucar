<?php

namespace Copserv\Http\Controllers\Config;

use Copserv\Config\Arl;
use Illuminate\Http\Request;
use Copserv\Http\Requests\CuentaCreateRequest;
use Copserv\Http\Requests;
use Copserv\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Redirect;
use Session;

class ArlController extends Controller
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
        $this->arl = Arl::find($route->getParameter('arl'));
        //$this->notFound($this->socio);
    }

    public function index(Request $request)
    {
        //$arls = arl::paginate(20);
        $arls = Arl::all();
        /*if($request->ajax()){
            return response()->json(view('config.arl.arls',compact('arls'))->render());
        }*/
        return view('config.arl.index',compact('arls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.arl.create');
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
            Arl::create($request->all());
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
        $this->Arl->delete();
        Session::flash('message','arl Eliminado Correctamente');
        return Redirect::to('/arl');
    }
}
