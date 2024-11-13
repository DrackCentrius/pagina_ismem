<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table='cuidades';
    protected $primaryKey='id_cuidad';
    protected $fillable=[
        'nombres_cuidad',
    ];
}
