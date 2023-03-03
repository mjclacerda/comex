<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    public function produtos()
    {
       return $this->hasMany(Produto::class, 'categoria_id');
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function(Builder $queryBuilder){
            $queryBuilder->orderBy('nome');
        });
    }
}
