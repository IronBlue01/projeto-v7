<?php

namespace App\Http\Controllers;

use App\Http\Models\Boleto;
use App\Http\Models\Cliente;
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


            }catch(\Throwable $e){
                    return response()->json(['status' => false, 'error' => $e->getMessage()]);
            }

    }

    public function updateCpf(Request $request){

        try {

            $id  = intval(explode('td_',$request->id)[1]);
            $cpf = preg_replace('/[^0-9]/', '', $request->cpf);

            $update =  Cliente::find($id)->update(['cpf' => $cpf]);
            
            if($update){
                return response()->json(['status' => 'CPF atualizado com successo!!']);
            }       

        } catch (\Throwable $ex) {

            return response()->json(['error' => $ex->getMessage()]);
        }
    }


    public function updateNome(Request $request){
        try {
            $update = Cliente::find($request->id)->update(['nome' => $request->nome]);
            
            if($update){
                return response()->json(['status' => 'Nome atualizado com sucesso']);
            }
           
        } catch (\Throwable $th){

            return response()->json(['status' => false, 'error' => $th->getMessage()]);

        }

        return response()->json(['nome' => $request->nome, 'id' => $request->id]);

    }


    public function updateBoleto(Request $request){

        try {


            //Atualizar o link do user
            Cliente::find($request->edit_id_cliente)->update(['link_drive' => $request->edit_link]);
            

            if($request->hasFile('edit_arquivo') && $request->file('edit_arquivo')->isValid()){
                // return 'tem arquivo';
            }  


            // return response()->json(['status'      => 200, 
            //                          'id_cliente' => $request->edit_id_cliente, 
            //                          'link'        => $request->edit_link,
            //                          'data'        => $request->edit_data]);

            return redirect('/home?success');
        

        } catch (\Throwable $th) {

            return response()->json(['status' => false, 'error' => $th->getMessage]);

        }

    }






}//end class
