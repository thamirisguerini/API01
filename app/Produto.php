<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable =[ 
        'descricao','preco','cor','peso'
    ];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
}
