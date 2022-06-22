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

    public function delete(Request $request){

        //Encontra o nome do arquivo do boleto
        $arquivo = Boleto::find($request->id_user)->arquivo;

        //Deleta o arquivo do boleto
        unlink(storage_path('app/boletos/').$arquivo);

        //apaga o user do banco  
        Cliente::findOrFail($request->id_user)->delete();

        //apaga o boleto do banco e da pasta
        Boleto::findOrfail($request->id_user)->delete();

        return redirect('home');
    }
}
