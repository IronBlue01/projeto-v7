<?php

namespace App\Http\Controllers;

use App\Http\Models\Boleto;
use App\Http\Models\Cliente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function list(Request $request){
          
        try {

        $id_user = $request->id_user;

        //Lista os dados deste user
        $dados_cliente = Cliente::find($id_user);
        
        //Pega dados do boleto caso exista
        $boleto = Boleto::find($id_user);

        if($boleto){
            $data_formatada = Carbon::parse($boleto->data)->format('d/m/Y');
        }

        
        return response()->json([
                                'status' => 200, 
                                'data'   => $dados_cliente,
                                'boleto' => $boleto,
                                'data_formatada'   => $data_formatada ?? ''
                                ]);

        } catch (\Exception $ex) {
            return response()->json(['msg' =>  'ouve algum erro', 'erro' => $ex->getMessage()]);
        }


    }
}
