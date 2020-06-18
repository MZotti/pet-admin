<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    protected $table = 'atendimento';
    protected $fillable = [
        'pet_id', 'data_atendimento', 'descricao'
    ];

    public function pet()
    {
        return belongsTo(Pet::class);
    }
}
