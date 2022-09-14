<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projeto extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function desenvolvedores(){
        return $this->belongsToMany("App\Models\Desenvolvedor", "alocacoes")->withPivot('horas_semanais');
    }
}
