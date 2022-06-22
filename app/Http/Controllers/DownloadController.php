<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download(Request $request){

        return response()->download(storage_path('app/boletos/').$request->arquivo,$request->nome_arquivo);
        
    }
}
