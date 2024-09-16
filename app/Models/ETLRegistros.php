<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ETLRegistros extends Model
{
    use HasFactory;
    protected $table = "etl_registros";
    protected $fillable = ["nome","cpf","email","telefone","dt_nascimento","genero"];
}
