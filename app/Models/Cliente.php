<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $primaryKey = 'dni';
    public $incrementing = false;
    protected $fillable = [
        'dni',
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'direccion',
        'ciudad',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'dni', 'nro_reservacion');
    }
}