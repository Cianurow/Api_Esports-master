<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Campeonato extends Model
{
    use HasFactory;
    protected $table = 'campeonatos';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'fecha_termino',
        'reglas',
        'premios',
    ];

    public function equipos(): BelongsToMany
    {
        return $this->belongsToMany(Equipo::class);
    }
}
