<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auto_por_locacion extends Model
{
    use HasFactory;

    protected $table = 'auto_por_locacion';
    protected $primaryKey = 'id_auto_locacion';
}
