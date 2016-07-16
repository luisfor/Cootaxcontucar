<?php

namespace Coocaxcontucar\Http\Controllers;

use Coocaxcontucar\Http\Requests;
use Coocaxcontucar\Http\Requests\UserCreateRequest;
use Coocaxcontucar\Http\Requests\UserUpdateRequest;
use Coocaxcontucar\Http\Controllers\Controller;
use Coocaxcontucar\User;
use Illuminate\Http\Request;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class UsuarioController extends Controller
{
    /*public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->user = User::find($route->getParameter('usuario'));
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('usuario.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $data=$request->all();
        if($data["password"] == $data["password2"]){
            User::create($request->all());
            Session::flash('message','Administrador Creado Correctamente');
            return Redirect::to('/login');
        }else{
            Session::flash('message-error','Contraseñas distintas');
            return Redirect::to('/configurar');
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
        //
    }
}
