<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{

    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['nome', 'idade', 'endereco', 'email', 'telefone'];

    public function endereco(){
        return $this->hasOne('App\Models\Endereco');
        //utilizado para quando a nomenclatura do laravel
        //return $this->hasOne('App\Models\Endereco', 'cliente_id', 'id');
    }

}
