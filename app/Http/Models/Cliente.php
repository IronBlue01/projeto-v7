<?php

namespace App\Http\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $fillable = [
                            'nome',
                            'senha',
                            'cpf',
                            'username',
                            'link_drive',
                            'arquivo',
                            'data',
                            'status'
                        ]; 
    



}
