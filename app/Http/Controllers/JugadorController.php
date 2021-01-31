<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JugadorController extends Controller
{
    //
    function show()
    {
         $datos = \DB::table('jugador')->get();
        return view('admin.jugadores')->with('datos', $datos);
    }



    public function datos_jugador($usuario)
    {
        $datos = \DB::table('jugador')                            
                            ->where('usuario','=', $usuario)
                            ->get();
        return $datos->idjugador;

        
    }


 
    public function store(Request $request)
    {
        
        $nombrecompleto     = $request["nombrecompleto"];
        $usuario            = $request["usuario"];
        $email              = $request["email"];
        $idmoneda           = $request["idmoneda"];
        $movil              = $request["movil"];
        $movil_wp           = $request["movil_wp"];

        return '
            <p>Nombre Completo'.$nombrecompleto.'</p>
            <p>usuario'.$usuario.'</p>
            <p>email'.$email.'</p>
            <p>idmoneda'.$idmoneda.'</p>
            <p>movil'.$movil.'</p>
            <p>movil_wp'.$movil_wp.'</p>

            ';

            
        //validacion de email en jugador
        $jugador = \DB::table('jugador')->where('email','=', $email)->get();
        if (count($jugador) > 0)
        {
            return response()->json([
                'status' => 'Ocurrio un error!',
                'msg' => 'El email ya se encuentra registrado!!!',
            ],202);
        }

        //validacion de usuario en jugador
        $jugador = \DB::table('jugador')->where('usuario','=', $usuario)->get();
        if (count($jugador) > 0)
        {
            return response()->json([
                'status' => 'Ocurrio un error!',
                'msg' => 'El usuario ya se encuentra registrado!!!',
            ],202);
        }
        
           

        \DB::table('jugador')->insert(
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
            'status' => 'Registro Satisfactorio!',
            'msg' => 'Los datos se han registrado satisfactoriamente!!!',
        ],200);

    }

        


}
