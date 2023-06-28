<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioAtencion extends Model
{
    use HasFactory;
    protected $table ='horarioatencions';
    protected $primaryKey="idHorarioAtencion";
    protected $guarded=[];
}
