<?php

namespace App\Http\Controllers;

use App\Http\Models\Boleto;
use App\Http\Models\Cliente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function PageCliente(Request $request){

        //Busca os dados do cliente logado
        $cliente = Cliente::find($request->id_cliente);

        $boleto = Boleto::find($request->id_cliente);

        $vencimento = Carbon::parse($boleto->data)->format('d/m/Y');
        
        return view('user.tables',[
                                    'cliente'    => $cliente,
                                    'boleto'     => $boleto,
                                    'vencimento' => $vencimento 
                                  ]);
    }
}
