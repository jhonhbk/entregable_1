<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    use HasFactory;
    protected $table = 'reservacions';

    protected $primaryKey = 'nro_reservacion';

    public $incrementing = false;

    protected $fillable = [
        'nro_reservacion',
        'nro_promocion',
        'dni',
        'pago_adelantado',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'nro reservacion', 'dni');
    }
}