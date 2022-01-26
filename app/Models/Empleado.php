<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    
    protected $fillable = ['contrato_id', 'Fullname', 'dni', 'email', 'phone'];

    public function contrato()
    {
        return $this->belongsTo(TipoContrato::class);
    }
}
