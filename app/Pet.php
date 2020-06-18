<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';
    protected $fillable = [
        'nome', 'especie'
    ];

    public function atendimento()
    {
        return $this->hasMany(Atendimento::class);
    }

}
