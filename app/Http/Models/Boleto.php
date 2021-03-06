<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Boleto extends Model
{

    protected $primaryKey = 'id_cliente';
    
    protected $fillable = [
                'id_cliente',
                'nome_arquivo',
                'arquivo',
                'data',
                'status',
    ];
}
