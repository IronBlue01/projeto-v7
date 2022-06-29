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

       
        $vencimento   = isset($boleto) ? Carbon::parse($boleto->data)->format('d/m/Y') : 0;
        $arquivo      = isset($boleto) ? $boleto->arquivo : '';
        $nome_arquivo = isset($boleto) ? $boleto->nome_arquivo : '';
        $display      = isset($boleto) ? '' : 'hidden';

        
        return view('user.tables',[
                                    'cliente'      => $cliente,
                                    'boleto'       => $boleto,
                                    'vencimento'   => $vencimento,
                                    'arquivo'      => $arquivo,
                                    'nome_arquivo' => $nome_arquivo,
                                    'display'      => $display 
                                  ]);
    }

    public function delete(Request $request){

        //Encontra o nome do arquivo do boleto
        $arquivo = Boleto::find($request->id_user);

        //Verifica se existe aruivo cadastrado para este user
        if($arquivo){
            
            $arquivo = $arquivo->arquivo;

            //Deleta o arquivo do boleto
            unlink(storage_path('app/boletos/').$arquivo);

            //apaga o boleto do banco e da pasta
            Boleto::findOrfail($request->id_user)->delete();
        }

        //apaga o user do banco  
        Cliente::findOrFail($request->id_user)->delete();

 

        return redirect('home');
    }
}
