<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Desenvolvedor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'desenvolvedores';

    public function projetos(){
        return $this->belongsToMany("App\Models\Projeto", "alocacoes")->withPivot('horas_semanais');
    }
}
