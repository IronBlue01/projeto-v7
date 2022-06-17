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
                          ->where('senha',$senha)
                          ->get();

     $id_cliente = $cliente->toArray()[0]['id_cliente'];


       if($cliente->count()>0){
        return redirect("page-cliente/$id_cliente");
       }
      

        
    }
}
