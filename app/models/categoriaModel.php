<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    //para romper la convención
    //Convención de configuración sobre convención
    protected $table = 'categorias';
    protected $primaryKey = 'idcategoria';
}