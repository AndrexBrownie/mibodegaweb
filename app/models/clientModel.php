<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{

    protected $table = 'clientes';
    protected $primaryKey = 'idcliente';
    protected $fillable = ['idcliente', 'idtipo','nombres', 'apellidos','email','telefono', 'nacimiento'];
}
