<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Empleados extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'sexo',
        'area_id',
        'boletin',
        'descripcion',
    ];

    /**
     * @return BelongsTo
     */
    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }

    /**
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Roles::class, 'empleado_role')->withPivot('role_id');
    }
}
