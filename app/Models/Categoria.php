<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'condicion'];

    public function articulos() //Para la relación
    {
        return $this->hasMany('App\Articulo');
    }
}
