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

        //Boleto upload
        if($request->hasFile('arquivo') && $request->file('arquivo')->isValid()){

           $extension = $requestFile->getClientOriginalExtension();
           $fileName  = md5($requestFile->getClientOriginalName() . strtotime('now')).'.'.$extension;
           $requestFile->move(storage_path('app/boletos/'),$fileName);

        }


       $insert_client = Cliente::create([
            'nome'       => $request->nome,
            'senha'      => 123,
            'cpf'        => $request->cpf,
            'link_drive' => $request->link,
            'username'   => 'v7formaturas'
        ]);


            Boleto::create([
                'id_cliente'   => $insert_client->id_cliente,
                'data'         => $request->data,
                'nome_arquivo' => $requestFile->getClientOriginalName(),
                'arquivo'      => $fileName,
                'status'       => 'aprovado'
            ]);

            return redirect('/home')->with('msg', 'Cliente cadastrado com sucesso');
    }
}
