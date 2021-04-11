<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Roles extends Model
{
    use HasFactory;

    /**
     * @return BelongsToMany
     */
    public function empleados(): BelongsToMany
    {
        return $this->belongsToMany(Empleados::class, 'empleado_role')->withPivot('empleados_id');
    }
}
