<?php

namespace App\Http\Controllers;

use App\Http\Models\Boleto;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function updateStatus(Request $request){
            try{

                $status_boll = (Boleto::find($request->id_user)->status == 'pendente') ? 'pago' : 'pendente';

                //Atualiza o status do boleto para pago
                $up = Boleto::find($request->id_user)->update(['status' => $status_boll]);

                if($up){
                    return response()->json(['status' => 200, 'msg' => 'atualizado com sucesso']);
                }else{
                    return response()->json(['status' => false, 'error' => 'ouve algum erro!!']);
                }


            }catch(\Exception $e){
                    return response()->json(['status' => false, 'error' => $e->getMessage()]);
            }

    }
}
