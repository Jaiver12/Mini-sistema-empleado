<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoContrato extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }
}
