<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $fillable = ['NOME', 'DATA_DE_NASCIMENTO','SOBRENOME','HOBBY','NATURALIDADE'];

    public $timestamps = false;


}
