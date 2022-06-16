<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Models\Cliente;
use Carbon\Carbon;

class CadastroController extends Controller
{
    public function cadastroBoleto(Request $request){

        //Boleto upload
        if($request->hasFile('arquivo') && $request->file('arquivo')->isValid()){

           $requestFile = $request->arquivo;

           $extension = $requestFile->extension();

           $fileName  = md5($requestFile->getClientOriginalName() . strtotime('now')).'.'.$extension;

           $requestFile->move(public_path('dashboard/boletos'),$fileName);

        }

        Cliente::create([
            'nome'       => $request->nome,
            'senha'      => $request->senha,
            'email'      => $request->email,
            'link_drive' => $request->link,
            'data'       => $request->data,
            'arquivo'    => $request->$fileName
        ]);

        return redirect('/home')->with('msg', 'Cliente cadastrado com sucesso');
    }
}
