<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $db_jugador = \DB::table('jugador')->where('estatus','=','PEN')->get();
        $db_depositos = \DB::table('deposito')->where('estatus','=','PEN')->get();
        $db_retiros = \DB::table('retiro')->where('estatus','=','PEN')->get();


        $jugadores = count($db_jugador);
        $depositos = count($db_depositos);
        $retiros = count($db_retiros);

        return view('home')->with(['jugadores'=>$jugadores,'depositos'=>$depositos,'retiros'=>$retiros]);
    }
}
