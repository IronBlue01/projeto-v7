<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Models\Cliente;
use App\Http\Models\Boleto;
use Carbon\Carbon;

class CadastroController extends Controller
{
    public function cadastroBoleto(Request $request){

        //Boleto upload
        if($request->hasFile('arquivo') && $request->file('arquivo')->isValid()){

           $requestFile = $request->arquivo;
           $extension = $requestFile->getClientOriginalExtension();
           $fileName  = md5($requestFile->getClientOriginalName() . strtotime('now')).'.'.$extension;
           $requestFile->move(public_path('dashboard/boletos'),$fileName);

        }

        $request->cpf;

       $insert_client = Cliente::create([
            'nome'       => $request->nome,
            'senha'      => $request->senha,
            'link_drive' => $request->link,
            'username'   => 'v7formaturas'
        ]);


            Boleto::create([
                'id_cliente'   => $insert_client->id,
                'data'         => $request->data,
                'nome_arquivo' => $request->arquivo,
                'arquivo'      =>  $fileName,
                'status'       => 'aprovado'
            ]);

            return redirect('/home')->with('msg', 'Cliente cadastrado com sucesso');
    }
}
