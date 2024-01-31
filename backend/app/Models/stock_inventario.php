<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock_inventario extends Model
{
    use HasFactory;

    protected $table = 'stock_inventario';

    protected $primaryKey = 'id_inventario';

    public $timestamps=false;

}
