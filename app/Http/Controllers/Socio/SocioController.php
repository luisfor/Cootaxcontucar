<?php

namespace Coocaxcontucar\Http\Controllers\Socio;

use Illuminate\Http\Request;
use Coocaxcontucar\Http\Requests\TercerosCreateRequest;
use Coocaxcontucar\Http\Requests;
use Coocaxcontucar\Http\Controllers\Controller;
use Coocaxcontucar\Socio;
use Coocaxcontucar\Tercero;
use Redirect;
use Session;
use Illuminate\Routing\Route;

class SocioController extends Controller
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
        $this->socio = Socio::find($route->getParameter('socio'));
        //$this->notFound($this->socio);
    }

    public function index(Request $request)
    {
        $socios = Socio::paginate(10);
        if($request->ajax()){
            return response()->json(view('socio.socios',compact('socios'))->render());
        }
        return view('socio.index',compact('socios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title  = 'Registrar Socio';
        return view('socio.create', ['page_title'=> $page_title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TercerosCreateRequest $request)
    {
        $request['tipo_tercero'] = 'socio';
        Socio::create($request->all());

        Session::flash('message','Socio Creado Correctamente');
        return Redirect::to('/socio');
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
        return view('socio.edit',['socio'=>$this->socio]);
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
        $this->socio->fill($request->all());
        $this->socio->save();
        Session::flash('message','Socio Actualizado Correctamente');
        return Redirect::to('/socio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->socio->delete();
        Session::flash('message','Socio Eliminado Correctamente');
        return Redirect::to('/socio');
    }
}
