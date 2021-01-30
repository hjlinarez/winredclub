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
        $datos = \DB::table('deposito')
            ->join('jugador', 'jugador.idjugador', '=', 'deposito.idjugador')            
            ->select('deposito.*', 'jugador.nombrecompleto')
            ->orderBy('deposito.id','desc')
            ->get();         
        return view('admin.depositos')->with('datos', $datos);
    }

    public function aprobar(Request $request)
    {
        $id = $request["id"];
        \DB::table('deposito')
              ->where('id', $id)
              ->update(['estatus' => 'APR']);

        return response()->json([
                'status' => 'Registro Procesado!',
                'msg' => 'Los datos se han registrado satisfactoriamente!!!',
            ],200);
    }


    public function rechazar(Request $request)
    {
        $id = $request["id"];
        \DB::table('deposito')
              ->where('id', $id)
              ->update(['estatus' => 'REC']);

        return response()->json([
                'status' => 'Deposito Rechazado!',
                'msg' => 'Los datos se han registrado satisfactoriamente!!!',
            ],200);
    }




    public function store(Request $request)
    {
        
        $usuario        = $request["usuario"];
        $email          = $request["email"];        
        $idmoneda       = $request["idmoneda"];
        $monto          = $request["monto"];
        $referencia          = $request["referencia"];

        

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
                ],202);
            }

            \DB::table('deposito')->insert(
                [
                    'idjugador'=>$idjugador,
                    'idmoneda'=>$idmoneda, 
                    'monto'=>$monto,
                    'referencia'=>$referencia
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
            ],202);

        }


        return response()->json([
            'status' => 'Ocurrio un error en el sistema!',
            'msg' => 'Verifique la informacion...',
        ],500);



        


        
    }
}