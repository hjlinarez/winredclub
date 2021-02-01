<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JugadorController extends Controller
{
    //
    public function index()
    {

    }
    
    public function show()
    {
         $datos = \DB::table('jugador')->orderBy('estatus','asc')->get();
        return view('admin.jugadores')->with('datos', $datos);
    }


    public function store(Request $request)
    {
        
        $nombrecompleto     = $request["nombrecompleto"];
        $usuario            = $request["usuario"];
        $email              = $request["email"];
        $idmoneda           = $request["idmoneda"];
        $movil              = $request["movil"];
        $movil_wp           = $request["movil_wp"];

        
           
        $jugador = \DB::table('jugador')->where('email','=', $email)->get();
        if (count($jugador) > 0)
        {           
           
            return response()->json([                
                'status' => 'Lo siento!!!',
                'msg' => 'Email ya se encuentra registrado.'
            ],202);            
        }
                    
        $jugador = \DB::table('jugador')->where('usuario','=', $usuario)->get();
        if (count($jugador) > 0)
        {            
            
            return response()->json([                
                'status' => 'Lo siento!!!',
                'msg' => 'El usuario ya se encuentra registrado.'
            ],202);
        }
           
        
        $id = \DB::table('jugador')->insertGetId(
            [
                'nombrecompleto'=>$nombrecompleto,
                'usuario'=>$usuario, 
                'email'=>$email,
                'movil'=>$movil,
                'idmoneda'=>$idmoneda,
                'movil_wp'=>$movil_wp
            ]
        );

    
        return response()->json([            
            'status' => 'Muy Bien!',
            'msg' => 'Datos registrados correctamentre.',
        ],200);      
        
    }



    public function datos_jugador($usuario)
    {
        $datos = \DB::table('jugador')                            
                            ->where('usuario','=', $usuario)
                            ->get();
        return $datos->idjugador;

        
    }

    public function datos_jugador_id(Request $request)
    {
        $idjugador = $request["idjugador"];
        $datos = \DB::table('jugador')                            
                            ->where('idjugador','=', $idjugador)
                            ->get();
        

        

        return $datos;


        
    }



    public function registrar(Request $request)
    {
        $idjugador = $request["idjugador"];
        \DB::table('jugador')
              ->where('idjugador', $idjugador)
              ->update(['estatus' => 'REG']);

        return response()->json([
                'status' => 'Registro Procesado!',
                'msg' => 'Los datos se han registrado satisfactoriamente!!!',
            ],200);
    }


    public function eliminar(Request $request)
    {
        $idjugador = $request["idjugador"];
        \DB::table('jugador')
              ->where('idjugador', $idjugador)
              ->delete();

        return response()->json([
                'status' => 'Registro Procesado!',
                'msg' => 'Los datos se han registrado satisfactoriamente!!!',
            ],200);
    }




    public function modificar(Request $request)
    {
        $idjugador          = $request["idjugador"];
        $nombrecompleto     = $request["nombrecompleto"];        
        $email              = $request["email"];        
        $movil              = $request["movil"];
        $movil_wp           = $request["movil_wp"];

        
           
        $jugador = \DB::table('jugador')->where('email','=', $email)->where('idjugador','<>',$idjugador)->get();
        
        if (count($jugador) > 0)
        {                      
            return response()->json([                
                'status' => 'Lo siento!!!',
                'msg' => 'Email ya se encuentra registrado.'
            ],202);            
        }


        \DB::table('jugador')
              ->where('idjugador', $idjugador)
              ->update([
                    'nombrecompleto' => $nombrecompleto,
                    'email' => $email,
                    'movil' => $movil,
                    'movil_wp' => $movil_wp
                ]);

    
        return response()->json([            
            'status' => 'Muy Bien!',
            'msg' => 'Datos registrados correctamentre.',
        ],200);      
        
    }
 
    

        


}
