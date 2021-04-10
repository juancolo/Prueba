<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    public function empleados()
    {
        return $this->belongsToMany(Empleados::class, 'empleado_role')->withPivot('empleado_id');
    }
}
