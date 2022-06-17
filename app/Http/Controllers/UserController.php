<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function PageCliente(int $id_cliente){
        return view('user.tables');
    }
}
