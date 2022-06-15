<?php

namespace App\Http\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = [
                            'nome',
                            'senha',
                            'email',
                            'username',
                            'link_drive',
                            'arquivo',
                            'data',
                            'status'
                        ]; 
    



}
