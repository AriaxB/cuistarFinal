<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    use HasFactory;

    protected $table='mascotas';

    protected $primaryKey = 'id_mascota	';

    public $timestamps = false;
}
