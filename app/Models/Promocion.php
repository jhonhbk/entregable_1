<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $table = 'promocions';
    protected $primaryKey = 'nro_promocion';
    public $incrementing = false;
    protected $fillable = [
        'nro_promocion',
        'tipo_viaje',
        'costo',
    ];

    public function promocion()
    {
        return $this->belongsTo(Promocion::class, 'nro_promocion', 'nro_reservacion');
    }
}