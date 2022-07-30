<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HorarioModel extends Model
{
    //para romper la convención
    //Convención de configuración sobre convención
    protected $table = 'horarios';
    protected $primarykey = 'idhorario';
}
