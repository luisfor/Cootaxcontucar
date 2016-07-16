<?php

namespace Coocaxcontucar\Http\Controllers\Empleado;

use Coocaxcontucar\Tercero;
use Illuminate\Http\Request;
use Coocaxcontucar\Empleado;
use Coocaxcontucar\Http\Requests;
use Coocaxcontucar\Http\Controllers\Controller;
use Coocaxcontucar\Http\Requests\EmpleadoCreateRequest;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Session;
use DB;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Input;
class EmpleadoController extends Controller
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
        $this->empleado = Empleado::find($route->getParameter('empleado'));
    }

    public function index(Request $request)
    {
        /*$empleados = DB::table('empleados')
            ->join('terceros', 'terceros.id','=','empleados.tercero_id')
            ->select('empleados.*','terceros.*')->paginate(1);*/
        $empleados = Empleado::paginate(10);
        if($request->ajax()){
            return response()->json(view('empleado.empleados',compact('empleados'))->render());
        }

        return view('empleado.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title  = 'Registrar Empleado';
        return view('empleado.create', ['page_title'=> $page_title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadoCreateRequest $request)
    {
        /*$tercero = new Tercero;
        $tercero->tipo_doc = Input::get('tipo_doc');
        $tercero->nombre = Input::get('nombre');
        $tercero->direccion = Input::get('direccion');
        $tercero->tipo_persona = Input::get('tipo_persona');
        $tercero->tipo_tercero = 'empleado';
        $tercero->save();

        $empleado = new Empleado;
        $empleado->cargo = Input::get('cargo');
        $empleado->sueldo = Input::get('sueldo');
        $empleado->eps = Input::get('eps');
        $empleado->fondo = Input::get('fondo');
        $empleado->arp = Input::get('arp');
        $empleado->cc = Input::get('cc');
        $empleado->tipo_contrato = Input::get('tipo_contrato');
        $empleado->tercero_id = $tercero->id;

        $empleado->save();*/
        $request['tipo_tercero'] = 'empleado';
        Empleado::create($request->all());
        Session::flash('message','Empleado Creado Correctamente');
        return Redirect::to('/empleado');
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
        /*$tercero = Tercero::find($id);
        $empleado = DB::table('empleados')
            ->join('terceros', 'terceros.id', '=', 'empleados.tercero_id')
            ->where('empleados.tercero_id', '=', $id)
            ->select('empleados.*')
            ->first();
        return view('empleado.edit',['empleado'=>$empleado, 'tercero'=>$tercero]);*/
        //$tercero = Tercero::lists('tipo_doc', 'nombre','tipo_persona','tipo_tercero','id');
        //$terceros = Tercero::findOrFail($id);
        return view('empleado.edit',['empleado'=>$this->empleado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpleadoCreateRequest $request, $id)
    {
        $this->empleado->fill($request->all());
        $this->empleado->save();
        Session::flash('message','Empleado Actualizado Correctamente');
        return Redirect::to('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->empleado->delete();
        Session::flash('message','Empleado Eliminado Correctamente');
        return Redirect::to('/empleado');
    }
}

