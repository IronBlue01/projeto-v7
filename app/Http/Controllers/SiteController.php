<?php

namespace App\Http\Controllers;

use App\Http\Models\Cliente;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function home(){
        return view('site.index');
    }


    public function pageLogin(){
        return view('login.login');
    }

    public function homeDash(){

        $clientes     =  Cliente::all();
        $num_clientes = $clientes->count();

        return view('dashboard.index', ['clientes'     => $clientes,
                                        'num_clientes' => $num_clientes
                                       ]);
    }

    public function modal(){
        return view('dashboard.modals');
    }

    public function card(){
        return view('dashboard.cards');
    }

    
    public function form(){
        return view('dashboard.forms');
    }

    public function chart(){
        return view('dashboard.charts');
    }

    public function buttons(){
        return view('dashboard.buttons');
    }

    public function table(){
        return view('dashboard.tables');
    }

    public function sobre(){
        return view('site.sobre');
    }


}//end class
