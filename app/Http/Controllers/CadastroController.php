<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Models\Cliente;
use App\Http\Models\Boleto;
use Carbon\Carbon;

class CadastroController extends Controller
{


    public function cadastroBoleto(Request $request){

        $requestFile = $request->arquivo;

        $insert_client = Cliente::create([
                'nome'       => $request->nome,
                'senha'      => 123,
                'cpf'        => preg_replace('/[^0-9]/', '', $request->cpf),
                'link_drive' => $request->link,
                'username'   => 'v7formaturas'
            ]);

        //Verifica se existe arquivo
        if($requestFile){
            //Boleto upload
                if($request->hasFile('arquivo') && $request->file('arquivo')->isValid()){
                    $extension = $requestFile->getClientOriginalExtension();
                    $fileName  = md5($requestFile->getClientOriginalName() . strtotime('now')).'.'.$extension;
                    $requestFile->move(storage_path('app/boletos/'),$fileName);
                }

                Boleto::create([
                    'id_cliente'   => $insert_client->id_cliente,
                    'data'         => $request->data,
                    'nome_arquivo' => $requestFile->getClientOriginalName(),
                    'arquivo'      => $fileName,
                    'status'       => 'pendente'
                ]);
        }


            return redirect('/home')->with('msg', 'Cliente cadastrado com sucesso');
    }
}
