<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restricao;

class PeriodoLetivo extends Model
{
    use HasFactory;
    

    protected $table = 'periodos_letivos';
    
    protected $guarded = ['id'];
    
    protected $fillable = [
        'codigo',
        'data_inicio',
        'data_fim',
        'data_inicio_reservas',
        'data_fim_reservas',
    ];
    

    public function restricao()
    {
        return $this->hasMany(Restricao::class)->with('sala');
    }

       

}
