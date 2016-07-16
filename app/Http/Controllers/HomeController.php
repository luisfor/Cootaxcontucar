<?php namespace Coocaxcontucar\Http\Controllers;

use Redirect;
class HomeController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
        //$this->middleware('admin');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $page_title = 'Dashboard';
        $page_description = 'Panel de control';
        return view('index', compact('page_description','page_title'));
    }

    public function update(){
        return "hola";
    }

}