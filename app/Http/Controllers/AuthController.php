<?php

namespace App\Http\Controllers;

use App\Http\Models\Cliente;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth(Request $request){
       $user  =  $request->user;
       $senha =  $request->senha;

       $cliente = Cliente::where('username', $user)
                          ->where('cpf',$senha)
                          ->first();


       if($cliente->count()>0){
        return redirect("page-cliente/$cliente->id_cliente");
       }else{
        return redirect("user/");
       }
      

        
    }
}
