<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     */
    public function empleados(): HasMany
    {
        return $this->hasMany(Empleados::class);
    }
}
