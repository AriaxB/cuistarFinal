<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden_Ventas extends Model
{
    use HasFactory;

    protected $table='orden_ventas';

    protected $primaryKey = 'id_ventas';

    public $timestamps = false;
}
