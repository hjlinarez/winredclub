<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositoController extends Controller
{
    public function index()
    {

    }

    public function show()
    {
        
    }

    public function store(Request $request)
    {
        
        $usuario        = $request["usuario"];
        $email          = $request["email"];        
        $idmoneda       = $request["idmoneda"];
        $monto          = $request["monto"];

        

        //validacion de email en jugador
        $jugador = \DB::table('jugador')
                            ->where('email','=', $email)
                            ->where('usuario','=', $usuario)
                            ->get();

        
        
        if (count($jugador) > 0)
        {
            $idjugador  = $jugador[0]->idjugador;
            if ($idmoneda <> $jugador[0]->idmoneda)
            {
                return response()->json([
                    'status' => 'Ocurrio un error!',
                    'msg' => 'La Moneda seleccionada no esta permitida',
                ],500);
            }

            \DB::table('deposito')->insert(
                [
                    'idjugador'=>$idjugador,
                    'idmoneda'=>$idmoneda, 
                    'monto'=>$monto
                ]
            );
    
            return response()->json([
                'status' => 'Registro Satisfactorio!',
                'msg' => 'Los datos se han registrado satisfactoriamente!!!',
            ],200);

        }
        else 
        {
            return response()->json([
                'status' => 'Ocurrio un error en el sistema!',
                'msg' => 'Email / usuario no existe',
            ],500);

        }



        


        
    }
}