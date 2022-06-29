<?php

namespace App\Http\Controllers;

use App\Http\Models\Cliente;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth(Request $request){
       $user  =  $request->user;
       $senha =  preg_replace('/[^0-9]/', '', $request->senha);

       if($user=='@adm' && $senha=='123'){
        return redirect("home");
       }

       $cliente = Cliente::where('username', $user)
                          ->where('cpf',$senha)
                          ->first();

       if($cliente){
         return redirect("page-cliente/$cliente->id_cliente");
       }else{
        return redirect('page-login');
       }
      

        
    }
}
